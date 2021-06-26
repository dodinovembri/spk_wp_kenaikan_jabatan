<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'EmployeeModel']);
    }

    public function index()
    {
        $data['users'] = $this->UserModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $employees = $this->UserModel->get()->result();
        $employee_id = [];
        foreach ($employees as $key => $value) {
            array_push($employee_id, $value->employee_id);
        }
        $data['users'] = $this->EmployeeModel->getByExclude($employee_id)->result();

        $this->load->view('templates/header');
        $this->load->view('user/create', $data);
        $this->load->view('templates/footer');
    }

    public function create_new()
    {
        $this->load->view('templates/header');
        $this->load->view('user/create_new');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        // get employee data
        $employee_id = $this->input->post('employee');
        $employee     = $this->EmployeeModel->getById($employee_id)->row();
        $password    = md5($employee->email);

        $data        = array(
            'employee_id'      => $employee->id,
            'email'    => $employee->email,
            'password'    => $password,
            'role_id' => $this->input->post('role'),
            'created_at' => date("Y-m-d H-i-s"),
            'created_by' => $this->session->userdata('id')
        );

        $this->UserModel->insert($data);
        $this->session->set_flashdata('success', "Data User berhasil ditambahkan!");
        return redirect(base_url('user'));
    }

    public function store_new()
    {
        // for image
        $image = uniqid();
        $config['upload_$this->UserModel->insert($data);path']          = './uploads/employee/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'name'       => $this->input->post('name'),
                'nik'        => $this->input->post('nik'),
                'gender'     => $this->input->post('gender'),
                'email'      => $this->input->post('email'),
                'image'      => $this->upload->data('file_name'),
                'location'   => $this->input->post('location'),
                'position'   => $this->input->post('position'),
                'type'   => 5,
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );
    
            $this->EmployeeModel->insert($data);
            $insert_id = $this->db->insert_id();
            $password    = md5($this->input->post('email'));

            $user        = array(
                'employee_id'      => $insert_id,
                'email'    => $this->input->post('email'),
                'password'    => $password,
                'role_id' => 5,
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );
            $this->UserModel->insert($user);

            $this->session->set_flashdata('success', "Data user berhasil ditambahkan!");
            return redirect(base_url('user'));            
        }
        else
        {                          
            $data = array(
                'name'       => $this->input->post('name'),
                'nik'        => $this->input->post('nik'),
                'gender'     => $this->input->post('gender'),
                'email'      => $this->input->post('email'),
                'location'   => $this->input->post('location'),
                'position'   => $this->input->post('position'),
                'type'   => 5,
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );
    
            $this->EmployeeModel->insert($data);
            $insert_id = $this->db->insert_id();
            $password    = md5($this->input->post('email'));

            $user        = array(
                'employee_id'      => $insert_id,
                'email'    => $this->input->post('email'),
                'password'    => $password,
                'role_id' => 5,
                'created_at' => date("Y-m-d H-i-s"),
                'created_by' => $this->session->userdata('id')
            );     
            $this->UserModel->insert($user);

            $this->session->set_flashdata('success', "Data user berhasil ditambahkan!");
            return redirect(base_url('user'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['user'] = $this->UserModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = array(
            'role_id'    => $this->input->post('role'),
            'updated_at' => date("Y-m-d H-i-s"),
            'updated_by' => $this->session->userdata('id')
        );

        $this->UserModel->update($data, $id);
        $this->session->set_flashdata('success', "Data user berhasil diubah!");
        return redirect(base_url('user'));
    }

    public function destroy($id)
    {
        $this->UserModel->destroy($id);
        $this->session->set_flashdata('success', "Data User berhasil dihapus!");
        return redirect(base_url('user'));
    }

    public function change_password($id)
    {
        $data['user_id_changed'] = $id;

        $this->load->view('templates/header');
        $this->load->view('user/change_password', $data);
        $this->load->view('templates/footer');
    }

    public function store_password()
    {
        $user_id_changed = $this->input->post('user_id_changed');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password yang anda masukkan tidak cocok");
            return redirect(base_url('user'));
        }else{
            $password = md5($this->input->post('password'));
            $data = array(
                'password' => $password,
            );

            $this->UserModel->update($data, $user_id_changed);
            $this->session->set_flashdata('success', "Password berhasil di ganti!");
            return redirect(base_url('user'));
        }
    }
}
