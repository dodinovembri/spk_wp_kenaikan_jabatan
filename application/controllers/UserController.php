<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel']);
    }

	public function index()
	{
        $data['users'] = $this->UserModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('user/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'email'      => $this->input->post('email'),
            'role_id'    => $this->input->post('role_id'),
            'created_at' => date("Y-m-d H-i-s"),
            'created_by' => $this->session->userdata('id')
        );

        $this->UserModel->insert($data);
        $this->session->set_flashdata('success', "Data User berhasil ditambahkan!");
        return redirect(base_url('user'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['user'] = $this->UserModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
         $data = array(
            'email'      => $this->input->post('email'),
            'role_id'    => $this->input->post('role_id'),
            'updated_at' => date("Y-m-d H-i-s"),
            'updated_by' => $this->session->userdata('id')
        );

        $this->UserModel->update($data, $id);
        $this->session->set_flashdata('success', "Data user berhasil diubah!");
        return redirect(base_url('user'));
    }

    public function destroy($id)
    {
        $delete = $this->UserModel->destroy($id);        
        $this->session->set_flashdata('success', "Data User berhasil dihapus!");
        return redirect(base_url('user'));
    }
    
}