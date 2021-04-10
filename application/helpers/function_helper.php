<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('check_role')) {
        function check_role($role_id)
        {
            if ($role_id == 0) {
                return "Administrator";
            }elseif ($role_id == 1) {
                return "Leader";
            }elseif ($role_id == 2) {
                return "Interviewer";
            }elseif ($role_id == 3) {
                return "Direktur";
            }elseif ($role_id == 4) {
                return "Employee";
            }
        }
    }

    if (!function_exists('check_gender')) {
        function check_gender($gender)
        {
            if ($gender == 0) {
                return "Perempuan";
            }elseif ($gender == 1) {
                return "Laki-laki";
            }
        }
    }  
    
    if (!function_exists('check_criteria_type')) {
        function check_criteria_type($criteria_type)
        {
            if ($criteria_type == 0) {
                return "Cost";
            }elseif ($criteria_type == 1) {
                return "Benefit";
            }
        }
    } 

    // start to calculate weighted product

    if ( ! function_exists('weight_fixes')){
        function weight_fixes(){
            $CI = get_instance();
            $CI->load->model('HelperModel');

            $sum_criteria_weight = $CI->HelperModel->sum_criteria_weight()->row();
            $criterias = $CI->HelperModel->criterias()->result();

            // $weight_fixed = 0;
            $weight_fixes = [];
            foreach ($criterias as $key => $value) {
                $each_weight_fixes = $value->criteria_weight / $sum_criteria_weight->sum_criteria_weight;
                array_push($weight_fixes, $each_weight_fixes);
                // $weight_fixed = $weight_fixed + $each_weight_fixes;
            }
            return $weight_fixes;
        }
    }         

    if ( ! function_exists('s_vector')){
        function s_vector($weight_fixes){
            $CI = get_instance();
            $CI->load->model('HelperModel');

            $employees = $CI->HelperModel->getWithJoin()->result();     
            var_dump($employees);
            die;

            // $weight_fixed = 0;
            $weight_fixes = [];
            foreach ($criterias as $key => $value) {
                $each_weight_fixes = $value->criteria_weight / $sum_criteria_weight->sum_criteria_weight;
                array_push($weight_fixes, $each_weight_fixes);
                // $weight_fixed = $weight_fixed + $each_weight_fixes;
            }
            return $weight_fixes;
        }
    }
?>
