<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeReportController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ResultModel', 'EmployeeModel', 'PositionHistoryModel']);
    }

	public function index()
	{
        $data['reports'] = $this->ResultModel->getWithJoinEmployeeReport()->result();

        $this->load->view('templates/header');
        $this->load->view('employee_report/index', $data);
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