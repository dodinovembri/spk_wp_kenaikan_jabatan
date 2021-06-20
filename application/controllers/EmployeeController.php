<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['EmployeeModel', 'DivisionModel']); //untuk load
    }

    public function index()
    {
        $data['employees'] = $this->EmployeeModel->getByTypes()->result();

        $this->load->view('templates/header');
        $this->load->view('employee/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['divisions'] = $this->DivisionModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('employee/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/employee/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'name'       => $this->input->post('name'),
                'nik'        => $this->input->post('nik'),
                'gender'     => $this->input->post('gender'),
                'email'      => $this->input->post('email'),
                'image'      => $this->upload->data('file_name'),
                'location'   => $this->input->post('location'),
                'division_id'   => $this->input->post('division_id'),
                'position'   => $this->input->post('position'),
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );
    
            $this->EmployeeModel->insert($data);
            $this->session->set_flashdata('success', "Data pegawai berhasil ditambahkan!");
            return redirect(base_url('employee'));            
        }
        else
        {                          
            $data = array(
                'name'       => $this->input->post('name'),
                'nik'        => $this->input->post('nik'),
                'gender'     => $this->input->post('gender'),
                'email'      => $this->input->post('email'),
                'location'   => $this->input->post('location'),
                'division_id'   => $this->input->post('division_id'),
                'position'   => $this->input->post('position'),
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );
    
            $this->EmployeeModel->insert($data);
            $this->session->set_flashdata('success', "Data pegawai berhasil ditambahkan!");
            return redirect(base_url('employee'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['employee'] = $this->EmployeeModel->getById($id)->row();
        $data['divisions'] = $this->DivisionModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('employee/edit', $data);
        $this->load->view('templates/footer');        
    }

    public function update($id)
    {
        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/employee/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'name'       => $this->input->post('name'),
                'nik'        => $this->input->post('nik'),
                'gender'     => $this->input->post('gender'),
                'image'      => $this->upload->data('file_name'),
                'location'   => $this->input->post('location'),
                'division_id'   => $this->input->post('division_id'),
                'position'   => $this->input->post('position'),
                'updated_at' => date("Y-m-d H-i-s"),
                'updated_by' => $this->session->userdata('id')
            );
    
            $this->EmployeeModel->update($data, $id);
            $this->session->set_flashdata('success', "Data pegawai berhasil diubah!");
            return redirect(base_url('employee'));          
        }
        else
        {                          
            $data = array(
                'name'       => $this->input->post('name'),
                'nik'        => $this->input->post('nik'),
                'gender'     => $this->input->post('gender'),
                'location'   => $this->input->post('location'),
                'division_id'   => $this->input->post('division_id'),
                'position'   => $this->input->post('position'),
                'updated_at' => date("Y-m-d H-i-s"),
                'updated_by' => $this->session->userdata('id')
            );
    
            $this->EmployeeModel->update($data, $id);
            $this->session->set_flashdata('success', "Data pegawai berhasil diubah!");
            return redirect(base_url('employee'));
        }
    }

    public function destroy($id)
    {
        $this->EmployeeModel->destroy($id);        
        $this->session->set_flashdata('success', "Data pegawai berhasil dihapus!");
        return redirect(base_url('employee'));
    }
}
