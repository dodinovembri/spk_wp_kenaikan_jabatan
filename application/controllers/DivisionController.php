<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DivisionController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('DivisionModel');

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['divisions'] = $this->DivisionModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('division/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('division/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $division_code = $this->input->post('division_code');
        $division_name = $this->input->post('division_name');
        $description = $this->input->post('description');
        $status = $this->input->post('status');

        $data = array(
            'division_code' => $division_code,
            'division_name' => $division_name,
            'description' => $description,
            'status' => $status
        );

        $this->DivisionModel->insert($data);
        $this->session->set_flashdata('success', "Success create new dicision!");
        return redirect(base_url('division'));
    }

    public function show($id)
    {
        $data['contact'] = $this->DivisionModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('contact/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['division'] = $this->DivisionModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('division/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $division_code = $this->input->post('division_code');
        $division_name = $this->input->post('division_name');
        $description = $this->input->post('description');
        $status = $this->input->post('status');

        $data = array(
            'division_code' => $division_code,
            'division_name' => $division_name,
            'description' => $description,
            'status' => $status
        );

        $this->DivisionModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update division!");
        return redirect(base_url('division'));
    }

    public function destroy($id)
    {
        $this->DivisionModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('division'));
    }
}
