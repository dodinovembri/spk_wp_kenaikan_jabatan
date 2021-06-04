<?php

class ResultModel extends CI_Model
{
    private $_table = "result";

    public function get()
    {
    	return $this->db->get($this->_table);
    }

    public function getWhere()
    {
        $this->db->where('status', 2);
    	return $this->db->get($this->_table);
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

    public function getWithJoin()
    {
        $this->db->select('result.id as result_id, date_of_promotion, employee_id, ranking, result.status as status, employee.name as name');
        $this->db->where('status', 2);
        $this->db->join('employee', 'result.employee_id = employee.id');
        $this->db->from($this->_table);
        return $this->db->get();             
    }

    public function getWithJoinEmployeeReport()
    {
        $this->db->select('result.id as result_id, date_of_promotion, employee_id, ranking, result.status as status, employee.name as name');
        $this->db->where('status', 1);
        $this->db->join('employee', 'result.employee_id = employee.id');
        $this->db->from($this->_table);
        return $this->db->get();             
    }    
    

    public function getWithJoinById($id)
    {
        $this->db->select('result.id as result_id, date_of_promotion, employee_id, ranking, result.status as status, employee.name as name');
        $this->db->where('status', 2);
        $this->db->where('result.id', $id);
        $this->db->join('employee', 'result.employee_id = employee.id');
        $this->db->from($this->_table);
        return $this->db->get();  
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

    public function updateStatus()
    {
        $this->db->set('status', 4);
        $this->db->update($this->_table);
    }
}