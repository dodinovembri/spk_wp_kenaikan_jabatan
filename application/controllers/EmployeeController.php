<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['EmployeeModel']);//untuk load
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
         $data['employees'] = $this->EmployeeModel->get()->result();
        
        $this->load->view('templates/header');
        $this->load->view('employee/create', $data);
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