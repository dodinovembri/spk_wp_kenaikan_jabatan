<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ResultModel', 'EmployeeModel', 'PositionHistoryModel']);
    }

	public function index()
	{
        $data['reports'] = $this->ResultModel->getWithJoin()->result();

        $this->load->view('templates/header');
        $this->load->view('report/index', $data);
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
        $data['report'] = $this->ResultModel->getWithJoinById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('report/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $result_id = $this->ResultModel->getById($id)->row();
        $employee = $this->EmployeeModel->getById($result_id->employee_id)->row();        
        $new_position = $this->input->post('new_position');

        $result_data = array(
            'status' => 1
        );

        $employee_data = array(
            'position' => $new_position,
            'updated_at'      => date("Y-m-d H-i-s"),
            'updated_by'      => $this->session->userdata('id')
        );

        $old_position = array(
            'employee_id' => $employee->id,
            'position' => $employee->position,
            'created_at'      => date("Y-m-d H-i-s"),
            'created_by'      => $this->session->userdata('id')
        );

        $this->ResultModel->update($result_data, $id);        
        $this->EmployeeModel->update($employee_data, $employee->id);        
        $this->PositionHistoryModel->insert($old_position);

        $this->session->set_flashdata('success', "Data User berhasil diupdate!");
        return redirect(base_url('report'));
    }

    public function destroy($id)
    {
        $this->ResultModel->destroy($id);
        $this->session->set_flashdata('success', "Data Kriteria berhasil dihapus!");
        return redirect(base_url('report'));
    }
}