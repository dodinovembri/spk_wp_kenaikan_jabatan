<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RankingController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('function');
        $this->load->model(['ResultModel', 'HelperModel']);

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

        foreach ($result as $key => $value) { 
            $data = array(                
                'date_of_promotion' => $date_of_promotion,
                'employee_id' => $value['employee_id'],
                'ranking' => $i,
                'status' => 2,
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );
            $i++;
            $this->ResultModel->insert($data);
        }

        $this->session->set_flashdata('success', "Data ranking pegawai berhasil disimpan!");
        return redirect(base_url("employee"));

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