<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'EmployeeModel']);
    }

    public function index()
    {
        $user_id = $this->session->userdata('id');
        $data['user'] = $this->UserModel->getById($user_id)->row();
        $data['employee'] = $this->EmployeeModel->getById($data['user']->employee_id)->row();

        $this->load->view('templates/header');
        $this->load->view('profile/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        // 
    }

    public function store($id)
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
                // 'position'   => $this->input->post('position'),
                'updated_at' => date("Y-m-d H-i-s"),
                'updated_by' => $this->session->userdata('id')
            );
    
            $this->EmployeeModel->update($data, $id);
            $this->session->set_flashdata('success', "Data profile berhasil diubah!");
            return redirect(base_url('profile'));          
        }
        else
        {                          
            $data = array(
                'name'       => $this->input->post('name'),
                'nik'        => $this->input->post('nik'),
                'gender'     => $this->input->post('gender'),
                'location'   => $this->input->post('location'),
                // 'position'   => $this->input->post('position'),
                'updated_at' => date("Y-m-d H-i-s"),
                'updated_by' => $this->session->userdata('id')
            );
    
            $this->EmployeeModel->update($data, $id);
            $this->session->set_flashdata('success', "Data profile berhasil diubah!");
            return redirect(base_url('profile'));
        }
    }

    public function store_pw($id)
    {
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Your password is doesn't match");
            return redirect(base_url('profile'));
        }else{
            $password = md5($password);                             
            $data = array(
                'password' => $password
            );

            $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Success update password!");
            return redirect(base_url('profile'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // 
    }

    public function update($id)
    {
        // 
    }

    public function destroy($id)
    {
        // 
    }
}
