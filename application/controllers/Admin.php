<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

	public function index()
	{
        $data['main_content']='admin/include/main_content';
		$this->load->view('admin/include/template', $data);
	}

	public function register()
	{
		$this->load->view('admin/auth/register');
	}
}
