<?php

class RatingModel extends CI_Model
{
    private $_table = "rating";

    public function get()
    {
    	return $this->db->get($this->_table);
    }

    public function getWithBuilder($id)
    {
        return $this->db->query("SELECT rating.*, employee.nik AS nik, criterion_value.benchmark AS benchmark, criteria.criteria_code AS criteria_code, criteria.criteria_name AS criteria_name FROM rating JOIN employee ON rating.employee_id = employee.id JOIN criteria ON rating.criteria_id = criteria.id JOIN criterion_value ON rating.criterion_value_id = criterion_value.id WHERE rating.employee_id = $id");
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->_table);
    } 
    
    public function getByIds($id)
    {
        $this->db->where('employee_id', $id);
        return $this->db->get($this->_table);
    }    

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }    

    public function destroy($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table);
    }
    
    public function destroyAllById($id)
    {
        $this->db->where('employee_id', $id);
        return $this->db->delete($this->_table);
    }    

    public function destroyAllByCriteria($criteria_id, $employee_id)
    {
        $this->db->where('criteria_id', $criteria_id);
        $this->db->where('employee_id', $employee_id);
        return $this->db->delete($this->_table);
    }
}