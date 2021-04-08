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
        $data['criterias'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('criteria/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('criteria/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'criteria_code'   => $this->input->post('criteria_code'),
            'criteria_name'   => $this->input->post('criteria_name'),
            'criteria_type'   => $this->input->post('criteria_type'),
            'criteria_weight' => $this->input->post('criteria_weight'),
            'created_at'      => date("Y-m-d H-i-s"),
            'created_by'      => $this->session->userdata('id')
        );

        $this->CriteriaModel->insert($data);
        $this->session->set_flashdata('success', "Data kriteria berhasil ditambahkan!");
        return redirect(base_url('criteria'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['criteria'] = $this->CriteriaModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('criteria/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = array(
            'criteria_code'   => $this->input->post('criteria_code'),
            'criteria_name'   => $this->input->post('criteria_name'),
            'criteria_type'   => $this->input->post('criteria_type'),
            'criteria_weight' => $this->input->post('criteria_weight'),
            'updated_at'      => date("Y-m-d H-i-s"),
            'updated_by'      => $this->session->userdata('id')
        );

        $this->CriteriaModel->update($data, $id);
        $this->session->set_flashdata('success', "Data kriteria berhasil diubah!");
        return redirect(base_url('criteria'));
    }

    public function destroy($id)
    {
        $this->CriteriaModel->destroy($id);
        $this->session->set_flashdata('success', "Data Kriteria berhasil dihapus!");
        return redirect(base_url('criteria'));
    }
}