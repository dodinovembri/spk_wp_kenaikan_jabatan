<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriteriaController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['CriteriaModel']);//untuk load
    }

	public function index()
	{
        $data['criteria'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('criteria/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $data['criteria'] = $this->CriteriaModel->get()->result();
        
        $this->load->view('templates/header');
        $this->load->view('criteria/create', $data);
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