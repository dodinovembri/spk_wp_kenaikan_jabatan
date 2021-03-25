<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller { // standar crud 

    function __construct()
    {
        // 
    }

	public function index()
	{
        
        $this->load->view('auth/login');
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