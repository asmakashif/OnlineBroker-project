<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index()
	{
		$data['main_content']='main_page/include/main_content';
		$this->load->view('main_page/include/template', $data);
		// $this->load->view('index');
	}

	// public function location()
	// {
	// 	$this->load->view('location');
	// }

	// public function address()
	// {
	// 	$this->load->view('address');
	// }

	public function logout()
	{
		$user_id=$this->session->userdata('id');
		$this->session->unset_userdata('userdata');
		$this->session->sess_destroy();
		redirect('welcome/index');
	}

	// public function savegeo()
	// {
	// 	$result=$this->user_model->savegeo();
 //        if($result)
 //        {
 //            $this->session->set_flashdata('flashSuccess', 'Submitted Successfully.');
 //            redirect('welcome/index');
 //        }
 //        else
 //        {
 //            $this->session->set_flashdata('flashError', 'Duplicate Enter Board !!!. Please try again!!!');
 //            redirect('welcome/index');
 //        }
	// }

	public function location()
	{
		$this->load->view('location');
	}

	public function getLocation()
	{
		if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    
    //if request status is successful
    if($status == "OK"){
        //get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    
    //return address to ajax 
    echo $location;
}
	}
}
