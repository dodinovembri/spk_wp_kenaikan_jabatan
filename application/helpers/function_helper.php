<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    /**
     * General function
     */
    
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
            }elseif ($role_id == 5) {
                return "Other";
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

    if (!function_exists('check_position')) {
        function check_position($position)
        {
            if ($position == 1) {
                return "ADM/OPR/MEC/ELEC/ANL";
            }elseif ($position == 2) {
                return "Junior Manager";
            }elseif ($position == 3) {
                return "Manager";
            }elseif ($position == 4) {
                return "Senior Manager";
            }else{
                return "";
            }
        }
    }     

    if (!function_exists('check_report_status')) {
        function check_report_status($report_status)
        {
            if ($report_status == 0) {
                return "Tidak Aktif";
            }elseif ($report_status == 1) {
                return "Dipromosikan";
            }elseif ($report_status == 2) {
                return "Draft";
            }elseif ($report_status == 3) {
                return "Ditolak";
            }elseif ($report_status == 4) {
                return "Tidak Terbaru";
            }
        }
    }     

    /**
     * below function for calculate weighted product
     */

    if ( ! function_exists('weight_fixes')){
        function weight_fixes(){
            $CI = get_instance();
            $CI->load->model('HelperModel');

            $sum_criteria_weight = $CI->HelperModel->sum_criteria_weight()->row();
            $criterias = $CI->HelperModel->criterias()->result();

            $weight_fixes = [];
            foreach ($criterias as $key => $value) {
                $each_weight_fixes = $value->criteria_weight / $sum_criteria_weight->sum_criteria_weight;
                array_push($weight_fixes, $each_weight_fixes);                
            }
            return $weight_fixes;
        }
    }         

    if ( ! function_exists('s_vector')){
        function s_vector($weight_fixes){
            $i = 0;
            $total_weight_fixes = count($weight_fixes);

            $CI = get_instance();
            $CI->load->model('HelperModel');            
            $criterias = $CI->HelperModel->getWithJoin()->result();    

            foreach ($criterias as $key => $value) {
                $weight_fixes_result = $weight_fixes[$i];                
                $employee_id = $value->employee_id;
                $criteria_id = $value->criteria_id;
                $s_vector = pow($value->score, $weight_fixes_result);
    
                // for reset to new
                $i++;
                if ($i == $total_weight_fixes) {
                    $i = 0;
                }
                $array[] = array('employee_id' => $employee_id, 'criteria_id' => $criteria_id, 's_vector' => $s_vector);  
                
            }
            return $array;
        }
    }

    if ( ! function_exists('s_vector_total')){
        function s_vector_total($s_vector, $total_weight_fixes){ 
            $alternative_id = 0;
            $i = 0;
            $max = $total_weight_fixes;            
            $pushed = [];
            $temp_s_vector_without_multiple = 0; 

            foreach ($s_vector as $key => $value) {
                $employee_id = $value['employee_id'];

                if ($i == 0) {
                    $temp_s_vector = $value['s_vector']; 

                }else{
                    if ($i <= 5) {                        
                        if ($value['employee_id'] == $employee_id) {
                            $temp_s_vector = $temp_s_vector * $value['s_vector']; 
                        }
                    }
                    if ($i == 5) {
                        $temp_s_vector = $temp_s_vector * 30/100;
                    }elseif ($i > 5 && $i <= 8){
                        if ($i == 6) {
                            $temp_s_vector_without_multiple = $value['s_vector'];                            
                        }else{
                            $temp_s_vector_without_multiple = $temp_s_vector_without_multiple * $value['s_vector']; 
                        }
                    }                    
                }
    
                $i++;
                if ($i == $max) {
                    $temp_s_vector = $temp_s_vector + $temp_s_vector_without_multiple;

                    $array[] = array('employee_id' => $employee_id, 'total_s_vector' => $temp_s_vector);
                    array_push($pushed, $array);
                    $i = 0;
                    $temp_s_vector_without_multiple = 0;
                }
            }       
            $data = $array;  

            return $data;
        }
    } 
    
    if ( ! function_exists('sum_s_vector_total')){
        function sum_s_vector_total($s_vector_total){
            $total = 0;
            foreach ($s_vector_total as $key => $value) {
                $total = $total + $value['total_s_vector'];
            }       
            $data = $total;
            return $data;
        }
    }
    
    if ( ! function_exists('v_vector')){
        function v_vector($s_vector_total, $sum_s_vector_total){
            foreach ($s_vector_total as $key => $value) {
                $employee_id = $value['employee_id'];
                $v_vector = $value['total_s_vector'] / $sum_s_vector_total;
    
                $array[] = array('employee_id' => $employee_id, 'v_vector' => $v_vector); 
            }
            $data = $array;
            return $data;
        }
    }
?>
