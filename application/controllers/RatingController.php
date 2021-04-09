<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['RatingModel', 'CriteriaModel', 'CriterionValueModel']);
    }

	public function index($id)
	{
        $employee = array(
            'employee_id' => $id
        );
        $this->session->set_userdata($employee);

        $data['employee_ratings'] = $this->RatingModel->getWithBuilder($id)->result();

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
        $criteria_criterion = $this->input->post('criteria_criterion');
        $this->RatingModel->destroyAllById($employee_id);

        foreach ($criteria_criterion as $key => $value) {
            $data = explode("&", $value);

            $employee_id = $this->session->userdata('employee_id');
            $criteria_id = $data[0];
            $criterion_value_id = $data[1];

            $data = array(
                'employee_id' => $employee_id,
                'criteria_id' => $criteria_id,
                'criterion_value_id' => $criterion_value_id,
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );

            $this->RatingModel->insert($data);
        }

        $this->session->set_flashdata('success', "Data rating pegawai berhasil ditambahkan!");
        return redirect(base_url("ratings/$employee_id"));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $rating = $this->RatingModel->getById($id)->row();
        $data['criterion_values'] = $this->CriterionValueModel->getByIds($rating->criteria_id)->result();
        $data['rating'] = $this->RatingModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('rating/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $employee_id = $this->session->userdata('employee_id');
        $criterion_value_id = $this->input->post('criterion_value_id');

        $data = array(
            'criterion_value_id' => $criterion_value_id
        );

        $this->RatingModel->update($data, $id);
        $this->session->set_flashdata('success', "Data rating pegawai berhasil diubah!");
        return redirect(base_url("ratings/$employee_id"));  
    }

    public function destroy($id)
    {
        $employee_id = $this->session->userdata('employee_id');
        $this->RatingModel->destroy($id);
        $this->session->set_flashdata('success', "Data rating pegawai berhasil dihapus!");
        return redirect(base_url("ratings/$employee_id"));
    }
}