<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DivisionChartController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ResultModel', 'CriteriaModel', 'UserModel']);
    }

	public function index()
	{
        $data['employees'] = $this->ResultModel->division_chart()->result();
        // var_dump($data['employees']);
        // die;
        $this->load->view('templates/header');
        $this->load->view('division_chart/index', $data);
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
}