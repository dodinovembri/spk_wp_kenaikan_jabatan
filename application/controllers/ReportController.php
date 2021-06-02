<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ResultModel']);
    }

	public function index()
	{
        $data['reports'] = $this->ResultModel->getWhere()->result();

        $this->load->view('templates/header');
        $this->load->view('report/index', $data);
        $this->load->view('templates/footer');
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
        $this->ResultModel->destroy($id);
        $this->session->set_flashdata('success', "Data Kriteria berhasil dihapus!");
        return redirect(base_url('report'));
    }
}