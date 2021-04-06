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
        $data['users'] = $this->UserModel->get()->result();
        
        $this->load->view('templates/header');
        $this->load->view('user/create', $data);
        $this->load->view('templates/footer');
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
    
}