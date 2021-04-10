<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RankingController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('function');
        $this->load->model(['CriteriaModel', 'HelperModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $weight_fixes = weight_fixes();
        $s_vector = s_vector($weight_fixes);

        // $this->output->delete_cache();
                
        // $btn_submit = $this->input->post('btn_submit');
        // $total_criteria = $this->CriteriaModel->get_total();
        // $total_importance_scale = $this->HelperModel->get_total();
        // $total_importance_scale = (int)$total_importance_scale->total;

        // if ($total_criteria == $total_importance_scale) {
        //     // weight fixes
        //     $weight_fixes = weight_fixes();
        //     $total_weight_fixes = count($weight_fixes);
            
        //     if (isset($btn_submit)) {
        //         $latitude_form = $this->input->post('latitude');
        //         $latitude = floatval($latitude_form);
        //         $longitude_form = $this->input->post('longitude');
        //         $longitude = floatval($longitude_form);

        //         // determine the s vector
        //         $s_vector = s_vector($weight_fixes, $latitude, $longitude);
        //     }else{
        //         // determine the s vector
        //         $s_vector = s_vector($weight_fixes);
        //     }

        //     // determine the s vector
        //     $s_vector_total = s_vector_total($s_vector, $total_weight_fixes);
        //     $sum_s_vector_total = sum_s_vector_total($s_vector_total);

        //     // determine the v vector
        //     $data['v_vector'] = v_vector($s_vector_total, $sum_s_vector_total);
        // }
        
        // $data['total_weight_fixes'] = $total_importance_scale;        
        // $data['total_criteria'] = $total_criteria;

        // $this->load->view('templates/backend/header');
		// $this->load->view('ranking/index', $data);
        // $this->load->view('templates/backend/footer');
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
