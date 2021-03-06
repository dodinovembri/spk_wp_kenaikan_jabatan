<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller { // standar crud 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'EmployeeModel']);
        if ($this->session->userdata('logged_in') == 1) {
            return redirect(base_url('home'));
        }
    }

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
	}
    
    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $check_auth = $this->UserModel->check_auth($username, $password)->row();
        if ($check_auth) {
            $employee = $this->EmployeeModel->getById($check_auth->employee_id)->row();
            $role_name = check_role($check_auth->role_id);
            $auth = array(
                    'id'        => $check_auth->id,
                    'name'      => $employee->name,
                    'email'     => $check_auth->email,
                    'role_id'   => $check_auth->role_id,
                    'role_name' => $role_name,
                    'image'     => $employee->image,
                    'logged_in' => 1,
            );
            
            $this->session->set_userdata($auth);
            return redirect(base_url('home'));
        }else{
            $this->session->set_flashdata('warning', "Username or Password is wrong!");
            return redirect(base_url('login'));
        }
    }
}