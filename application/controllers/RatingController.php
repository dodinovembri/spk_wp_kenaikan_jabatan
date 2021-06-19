<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['RatingModel', 'CriteriaModel', 'CriterionValueModel', 'EmployeeModel']);
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
        // $this->RatingModel->destroyAllById($employee_id);
        
        foreach ($criteria_criterion as $key => $value) {
            $data = explode("&", $value);
            
            $employee_id = $this->session->userdata('employee_id');
            $criteria_id = $data[0];
            $criterion_value_id = $data[1];

            $this->RatingModel->destroyAllByCriteria($criteria_id, $employee_id);

            $employee = $this->EmployeeModel->getById($employee_id)->row();
            $is_rating_admin = $employee->is_rating_admin;
            $is_rating_leader = $employee->is_rating_leader;
            $is_rating_interviewer = $employee->is_rating_interviewer;

            if ($this->session->userdata('role_id') == 0) {
                $is_rating_admin = 1;
            }elseif ($this->session->userdata('role_id') == 1) {
                $is_rating_leader = 1;
            }elseif ($this->session->userdata('role_id') == 2) {
                $is_rating_interviewer = 1;
            }

            $data = array(
                'employee_id' => $employee_id,
                'criteria_id' => $criteria_id,
                'criterion_value_id' => $criterion_value_id,
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );

            $data_employee = array(
                'is_rating_admin' => $is_rating_admin,
                'is_rating_leader' => $is_rating_leader,
                'is_rating_interviewer' => $is_rating_interviewer,
                'updated_at' => date("Y-m-d H-i-s"),
                'updated_by' => $this->session->userdata('id')
            );
            
            $this->RatingModel->insert($data);
            $this->EmployeeModel->update($data_employee, $employee_id);
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
        $data['employee'] = $this->EmployeeModel->getById($rating->employee_id)->row();
        $data['criteria'] = $this->CriteriaModel->getById($rating->criteria_id)->row();

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