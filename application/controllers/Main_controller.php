<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
    }

	public function residentialsearch()
	{
		$data['main_content']='main_page/residentialsearch';
		$this->load->view('main_page/include/template', $data);
	}

	public function commercial()
	{
		$data['main_content']='main_page/commercial';
		$this->load->view('main_page/include/template', $data);
	}

	public function office_space()
	{
		$data['main_content']='main_page/office_space';
		$this->load->view('main_page/include/template', $data);
	}

	public function plots()
	{
		$data['main_content']='main_page/plots';
		$this->load->view('main_page/include/template', $data);
	}

	public function market_analysis()
	{
		$data['main_content']='main_page/market_analysis';
		$this->load->view('main_page/include/template', $data);
	}

	public function demand_supply()
	{
		$data['main_content']='main_page/demand_supply';
		$this->load->view('main_page/include/template', $data);
	}

	public function our_network()
	{
		$data['main_content']='main_page/our_network';
		$this->load->view('main_page/include/template', $data);
	}

	public function about_network()
	{
		$data['main_content']='main_page/about_network';
		$this->load->view('main_page/include/template', $data);
	}

	public function broker_signup()
	{
		$data['main_content']='main_page/auth/broker_signup';
		$this->load->view('main_page/include/template', $data);
	}

	// public function unique_id()
 //    {
 //        $cc = $this->db->count_all('tbl_broker')+1;
 //        $coun = str_pad($cc, 4, 0, STR_PAD_LEFT); // Updated line to include '0'
 //        $id = "s"."-"."bkr"."-";
 //        $customid = $id.$coun;
 //        // echo $customid;
 //    }

	public function owner_details()
	{
		$data['main_content']='main_page/auth/owner_details';
		$this->load->view('main_page/include/template', $data);
	}

	public function owner_verify()
	{
		$data['main_content']='main_page/auth/owner_verification';
		$this->load->view('main_page/include/template', $data);
	}

	public function about_us()
	{
		$data['main_content']='main_page/about_us';
		$this->load->view('main_page/include/template', $data);
	}

	public function customer_testimony()
	{
		$data['main_content']='main_page/customer_testimony';
		$this->load->view('main_page/include/template', $data);
	}

	public function connect()
	{
		$data['main_content']='main_page/connect';
		$this->load->view('main_page/include/template', $data);
	}
}
