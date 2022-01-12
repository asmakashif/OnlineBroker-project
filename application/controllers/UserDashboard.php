<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index()
	{
		// $data['main_content']='user/include_1/main_content';
		// $this->load->view('user/include_1/template', $data);
        // $this->load->view('include_1/in');
        $data['main_content']='user/include/main_content';
		$this->load->view('user/include/template', $data);
	}

	public function user_acc_details()
	{
		$data['main_content']='auth/user_acc_details';
		$this->load->view('user/include/template', $data);
        // $this->load->view('auth/user_acc_details');
	}

	public function residentialsearch()
	{
		$data['main_content']='user/residentialsearch';
		$this->load->view('user/include/template', $data);
	}

	public function commercial()
	{
		$data['main_content']='user/commercial';
		$this->load->view('user/include/template', $data);
	}

	public function office_space()
	{
		$data['main_content']='user/office_space';
		$this->load->view('user/include/template', $data);
	}

	public function plots()
	{
		$data['main_content']='user/plots';
		$this->load->view('user/include/template', $data);
	}

	public function market_analysis()
	{
		$data['main_content']='user/market_analysis';
		$this->load->view('user/include/template', $data);
	}

	public function demand_supply()
	{
		$data['main_content']='user/demand_supply';
		$this->load->view('user/include/template', $data);
	}

	public function our_network()
	{
		$data['main_content']='user/our_network';
		$this->load->view('user/include/template', $data);
	}

	public function about_network()
	{
		$data['main_content']='user/about_network';
		$this->load->view('user/include/template', $data);
	}

	public function broker_signup()
	{
		$data['main_content']='user/auth/broker_signup';
		$this->load->view('user/include/template', $data);
	}

	public function about_us()
	{
		$data['main_content']='user/about_us';
		$this->load->view('user/include/template', $data);
	}

	public function customer_testimony()
	{
		$data['main_content']='user/customer_testimony';
		$this->load->view('user/include/template', $data);
	}

	public function connect()
	{
		$data['main_content']='user/connect';
		$this->load->view('user/include/template', $data);
	}
}
