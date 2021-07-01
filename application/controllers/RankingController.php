<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RankingController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('function');
        $this->load->model(['ResultModel', 'HelperModel', 'RatingModel', 'EmployeeModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        // call all related function to helper
        $weight_fixes = weight_fixes();
        $data['weight_fixes'] = $weight_fixes;
        
        $total_weight_fixes = count($weight_fixes);
        $s_vector = s_vector($weight_fixes);

        $s_vector_total = s_vector_total($s_vector, $total_weight_fixes);
        $sum_s_vector_total = sum_s_vector_total($s_vector_total);       

        // $data['v_vector'] = v_vector($s_vector_total, $sum_s_vector_total);
        $data = v_vector($s_vector_total, $sum_s_vector_total);
        
        $n=count($data);
        // sort with buble sort
        for ($i=0; $i < $n; $i++) { 
            for ($j=$n-1; $j > $i ; $j--) { 
                if ($data[$j]["v_vector"] > $data[$j-1]["v_vector"]) {
                    $dummy=$data[$j];
                    $data[$j]=$data[$j-1];
                    $data[$j-1]=$dummy;
                }
            }
        }        
        $data['v_vector'] = $data;
        $data['weight_fixes'] = weight_fixes();
        $data['s_vector_total'] = s_vector_total($s_vector, $total_weight_fixes);
        $data['v_vector_not_sort'] = v_vector($s_vector_total, $sum_s_vector_total);

        $this->load->view('templates/header');
		$this->load->view('ranking/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        //
    }

    public function store()
    {
        // call all related function to helper
        $weight_fixes = weight_fixes();
        $data['weight_fixes'] = $weight_fixes;
        
        $total_weight_fixes = count($weight_fixes);
        $s_vector = s_vector($weight_fixes);

        $s_vector_total = s_vector_total($s_vector, $total_weight_fixes);
        $sum_s_vector_total = sum_s_vector_total($s_vector_total);       

        // $data['v_vector'] = v_vector($s_vector_total, $sum_s_vector_total);
        $data = v_vector($s_vector_total, $sum_s_vector_total);
        
        $n=count($data);
        // sort with buble sort
        for ($i=0; $i < $n; $i++) { 
            for ($j=$n-1; $j > $i ; $j--) { 
                if ($data[$j]["v_vector"] > $data[$j-1]["v_vector"]) {
                    $dummy=$data[$j];
                    $data[$j]=$data[$j-1];
                    $data[$j-1]=$dummy;
                }
            }
        }    
        $result = $data;

        $date_of_promotion = $this->input->post('date_of_promotion');
        $i = 1;

        $this->ResultModel->updateStatus();
        // $vector = '';
        // $tot = [];

        foreach ($result as $key => $value) { 

            // if ($vector == $value['v_vector']) {
            //     $tot[] = $key;
            // }else{
            //     $i++;
            //     $i = $i + count($tot);
            //     $tot = [];
            // }

            $data = array(                
                'date_of_promotion' => $date_of_promotion,
                'employee_id' => $value['employee_id'],
                'ranking' => $i,
                'v_vector' => $value['v_vector'],
                'status' => 2,
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );
            $i++;
            $this->ResultModel->insert($data);
            // $vector = $value['v_vector'];
        }

        // for update report
        $result_id = $this->ResultModel->getLast()->row();
        $id_same = $this->ResultModel->getAllSame($result_id->v_vector)->result();

        foreach ($id_same as $key => $value) {
            $employee = $this->EmployeeModel->getById($value->employee_id)->row();        
            $new_position = $this->input->post('new_position');
            $status = $this->input->post('status');
            $status = $status == 4 ? $status : "1";
            
            $result_data = array(
                'status' => $status
            );

            $employee_data = array(
                'new_position' => $employee->position + 1,
                'updated_at'      => date("Y-m-d H-i-s"),
                'updated_by'      => $this->session->userdata('id')
            );

            $this->ResultModel->update($result_data, $value->id);        
            $this->EmployeeModel->update($employee_data, $employee->id);        
        }

        $this->session->set_flashdata('success', "Data ranking pegawai berhasil disimpan!");
        return redirect(base_url("employee"));

    }

    public function show($id)
    {
        $data['employee_ratings'] = $this->RatingModel->getWithBuilder($id)->result();

        $this->load->view('templates/header');
		$this->load->view('ranking/show', $data);
        $this->load->view('templates/footer');
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
