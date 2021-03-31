<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller { // standar crud 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', '']);
    }

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
	}

    public function create()
    {
        // 
    }

    public function store()
    {
        // 
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
    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $check_auth = $this->UserModel->check_auth($username, $password)->row();
        if ($check_auth) {
            $auth = array(
                    'id' => $check_auth->id,
                    'employee_id'  => $check_auth->name,
                    'email'     => $check_auth->email,
                    'role_id'   => $check_auth->role_id,
                    'logged_in' => 1
            );

            $this->session->set_userdata($auth);
            return redirect(base_url('home'));
        }else{
            $this->session->set_flashdata('warning', "Username or Password is wrong!");
            return redirect(base_url('login'));
        }
    }
}