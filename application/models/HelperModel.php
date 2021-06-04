<?php

class HelperModel extends CI_Model
{
    public function sum_criteria_weight()
    {
        return $this->db->query("SELECT SUM(criteria_weight) as sum_criteria_weight FROM criteria");
    }

    public function criterias()
    {
        return $this->db->get('criteria');
    }

    public function getWithJoin()
    {
        return $this->db->query("SELECT rating.*, criterion_value.information AS information, criterion_value.score AS score, criteria.criteria_code AS criteria_code FROM rating JOIN criterion_value ON rating.criterion_value_id = criterion_value.id JOIN employee ON rating.employee_id = employee.id JOIN criteria ON rating.criteria_id = criteria.id WHERE employee.type = 4 ORDER by employee_id, criteria_id");
    }
}