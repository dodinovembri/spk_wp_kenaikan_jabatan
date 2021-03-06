<?php

class EmployeeModel extends CI_Model
{
    private $_table = "employee";

    public function get()
    {
        return $this->db->get($this->_table);
    }

    public function getByType()
    {
        $this->db->where('type', 4);
        return $this->db->get($this->_table);
    }

    public function getByTypes()
    {
        $this->db->select('employee.*, division.division_name as division');
        $this->db->from('employee');
        $this->db->join('division', 'employee.division_id = division.id', 'left');
        $this->db->where('type', 4);
        return $query = $this->db->get();
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
        $this->db->where('id', $id);
        return $this->db->get($this->_table);
    }

    public function getByExclude($employee_id)
    {
        $this->db->where_not_in('id', $employee_id);
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

    public function count()
    {
        $this->db->where('type', 4);
        $this->db->from("employee");
        return $this->db->count_all_results();
    }
}
