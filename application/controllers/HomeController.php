<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('home/index');
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
    
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'User Logout successfully');

        return redirect(base_url('login'));
    }    
}