<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['EmployeeModel']); //untuk load
    }

    public function index()
    {
        $data['employees'] = $this->EmployeeModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('employee/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('employee/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'name'       => $this->input->post('name'),
            'nik'        => $this->input->post('nik'),
            'gender'     => $this->input->post('gender'),
            'email'      => $this->input->post('email'),
            'location'   => $this->input->post('location'),
            'position'   => $this->input->post('position'),
            'created_at' => date("Y-m-d H-i-s"),
            'created_by' => $this->session->userdata('id')
        );

        $this->EmployeeModel->insert($data);
        $this->session->set_flashdata('success', "Data pegawai berhasil ditambahkan!");
        return redirect(base_url('employee'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['employee'] = $this->EmployeeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('employee/edit', $data);
        $this->load->view('templates/footer');        
    }

    public function update($id)
    {
        $data = array(
            'name'       => $this->input->post('name'),
            'nik'        => $this->input->post('nik'),
            'gender'     => $this->input->post('gender'),
            'location'   => $this->input->post('location'),
            'position'   => $this->input->post('position'),
            'updated_at' => date("Y-m-d H-i-s"),
            'updated_by' => $this->session->userdata('id')
        );

        $this->EmployeeModel->update($data, $id);
        $this->session->set_flashdata('success', "Data pegawai berhasil diubah!");
        return redirect(base_url('employee'));
    }

    public function destroy($id)
    {
        $this->EmployeeModel->destroy($id);        
        $this->session->set_flashdata('success', "Data pegawai berhasil dihapus!");
        return redirect(base_url('employee'));
    }
}
