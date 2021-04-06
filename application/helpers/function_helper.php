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

?>