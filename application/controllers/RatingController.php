<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['RatingModel']);
    }

	public function index($id)
	{
        $employee = array(
            'employee_id' => $id
        );
        $this->session->set_userdata($employee);

        $data['employee_ratings'] = $this->RatingModel->getByIds($id)->result();

        $this->load->view('templates/header');
		$this->load->view('rating/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $data['criterias'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('rating/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $employee_id = $this->session->userdata('employee_id');
        $data = array(
            'employee_id' => $employee_id,
            'criteria_id' => $this->input->post('criteria_id'),
            'criterion_value_id' => $this->input->post('criterion_value_id'),
            'created_at'      => date("Y-m-d H-i-s"),
            'created_by'      => $this->session->userdata('id')
        );

        $this->RatingModel->insert($data);
        $this->session->set_flashdata('success', "Data rating pegawai berhasil ditambahkan!");
        return redirect("ratings/$employee_id");
   
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['employee_rating'] = $this->RatingModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('rating/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $employee_id = $this->session->userdata('employee_id');
        $data = array(
            'criteria_id' => $this->input->post('criteria_id'),
            'criterion_value_id' => $this->input->post('criterion_value_id'),
            'updated_at'      => date("Y-m-d H-i-s"),
            'updated_by'      => $this->session->userdata('id')
        );

        $this->RatingModel->update($data, $id);
        $this->session->set_flashdata('success', "Data rating pegawai berhasil diubah!");
        return redirect(base_url("ratings/$criteria_id"));      
    }

    public function destroy($id)
    {
        $employee_id = $this->session->userdata('employee_id');
        $this->RatingModel->destroy($id);
        $this->session->set_flashdata('success', "Data rating pegawai berhasil dihapus!");
        return redirect(base_url("ratings/$employee_id"));
    }
}