<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriterionValueController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['CriterionValueModel']);
    }

	public function index($id)
	{
        $criteria = array(
            'criteria_id' => $id
        );
        $this->session->set_userdata($criteria);

        $data['criterion_values'] = $this->CriterionValueModel->getByIds($id)->result();

        $this->load->view('templates/header');
		$this->load->view('criterion_value/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('criterion_value/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $description = $this->input->post('description');
        $value = $this->input->post('value');
        $status = $this->input->post('status');

        $data = array(
            'criteria_id' => $criteria_id,
            'description' => $description,
            'value' => $value,
            'status' => $status
        );

        $insert = $this->CriterionValueModel->insert($data);
        $this->session->set_flashdata('success', "Success create criterion value!");
        return redirect("criterion_value/$criteria_id");
   
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['criterion_value'] = $this->CriterionValueModel->get_data($id)->row();

        $this->load->view('templates/header');
        $this->load->view('criterion_value/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $description = $this->input->post('description');
        $value = $this->input->post('value');
        $status = $this->input->post('status');

        $data = array(
            'description' => $description,
            'value' => $value,
            'status' => $status
        );

        $update = $this->CriterionValueModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url("criterion_value/$criteria_id"));      
    }

    public function destroy($id)
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $delete = $this->CriterionValueModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url("criterion_value/$criteria_id"));
    }
}