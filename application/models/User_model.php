<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function login($email,$pass)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email',$email);
        $this->db->where('password',$pass);

        $query=$this->db->get();
        
        if($query->num_rows()==1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    public function saveUserData()
    {
        $fullname=$this->input->post('fullname');
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');
        $user_id=$this->input->post('user_id');
        $role_id=$this->input->post('role_id');
        $whatsapp=$this->input->post('whatsapp');
        $interested_in=$this->input->post('interested_in');
        $typeofproperty=$this->input->post('typeofproperty');
        $password=$this->input->post('password');
        $created_date= date("Y-m-d H:i:s");
        $lat=$this->input->post('txtlat');
        $long=$this->input->post('txtlang');

        $userData=array
        (
            'user_id'=>$user_id,
            'role_id'=>$role_id,
            'fullname'=>$fullname,
            'email'=>$email,
            'mobile'=>$mobile,
            'whatsapp'=>1,
            'interested_in'=>$interested_in,
            'typeofproperty'=>$typeofproperty,
            'password'=>md5($password),
            'created_date' => $created_date,
            'lat'=>$lat,
            'long'=>$long,

        );
        $insert_success=$this->db->insert('tbl_user',$userData);
        return $insert_success;
    }

    public function saveBrokerData()
    {
        $fullname=$this->input->post('fullname');
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');
        $role_id=$this->input->post('role_id');
        $whatsapp=$this->input->post('whatsapp');
        $password=$this->input->post('password');
        $address=$this->input->post('address');
        $state=$this->input->post('state');
        $city=$this->input->post('city');
        $country=$this->input->post('country');
        $brokertype=$this->input->post('brokertype');
        $broker_id=$this->input->post('broker_id');
        $organisation_name=$this->input->post('organisation_name');
        $gst_no=$this->input->post('gst_no');
        $registration_no=$this->input->post('registration_no');
        $pan_no=$this->input->post('pan_no');
        // $owner_email=$this->input->post('owner_email');
        $created_date= date("Y-m-d H:i:s");

        $userData=array
        (
            'role_id'=>$role_id,
            'fullname'=>$fullname,
            'email'=>$email,
            'mobile'=>$mobile,
            'whatsapp'=>1,
            'password'=>md5($password),
            'created_date' => $created_date,
        );

        $brokerData=array
        (
            'role_id'=>$role_id,
            'address'=>$address,
            'state'=>$state,
            'city'=>$city,
            'country'=>$country,
            'brokertype'=>$brokertype,
            'broker_id'=>$broker_id,
            'organisation_name'=>$organisation_name,
            'gst_no' => $gst_no,
            'registration_no'=>$registration_no,
            'pan_no'=>$pan_no,
        );

        $res=$this->db->insert('tbl_user',$userData);
        if($res)
        {
            $this->db->insert('tbl_broker',$brokerData);
        }
    }

    public function saveOwnerData()
    {
        $fullname=$this->input->post('fullname');
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');
        $role_id=$this->input->post('role_id');
        $whatsapp=$this->input->post('whatsapp');
        $password=$this->input->post('password');
        $address=$this->input->post('address');
        $state=$this->input->post('state');
        $city=$this->input->post('city');
        $country=$this->input->post('country');
        $broker_id=$this->input->post('broker_id');
        $agency=$this->input->post('agency');
        $organisation_name=$this->input->post('organisation_name');
        $gst_no=$this->input->post('gst_no');
        $registration_no=$this->input->post('registration_no');
        $pan_no=$this->input->post('pan_no');
        // $owner_email=$this->input->post('owner_email');
        $created_date= date("Y-m-d H:i:s");

        $userData=array
        (
            'role_id'=>$role_id,
            'fullname'=>$fullname,
            'email'=>$email,
            'mobile'=>$mobile,
            'whatsapp'=>1,
            'password'=>md5($password),
            'created_date' => $created_date,
        );

        $brokerData=array
        (
            'role_id'=>$role_id,
            'broker_id'=>$broker_id,
            'address'=>$address,
            'state'=>$state,
            'city'=>$city,
            'country'=>$country,
            'own_agency'=>$agency,
            'organisation_name'=>$organisation_name,
            'gst_no' => $gst_no,
            'registration_no'=>$registration_no,
            'pan_no'=>$pan_no,
        );

        $res=$this->db->insert('tbl_user',$userData);
        if($res)
        {
            $this->db->insert('tbl_broker',$brokerData);
        }
    }

    public function verfiyOwner()
    {
        // $organisation_name=$this->input->post('organisation_name');
        $owner_fullname=$this->input->post('owner_fullname');
        $owner_mobile=$this->input->post('owner_mobile');
        $owner_email=$this->input->post('owner_email');

        $owner_id=$this->input->post('owner_id');
        $broker_id=$this->input->post('broker_id');
        $v_broker_id = $owner_id . "-" . $broker_id;
        
        $fullname=$this->input->post('fullname');
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');
        $role_id=$this->input->post('role_id');
        $whatsapp=$this->input->post('whatsapp');
        $password=$this->input->post('password');
        $address=$this->input->post('address');
        $state=$this->input->post('state');
        $city=$this->input->post('city');
        $country=$this->input->post('country');
        $created_date= date("Y-m-d H:i:s");

        $userData=array
        (
            'role_id'=>$role_id,
            'fullname'=>$fullname,
            'email'=>$email,
            'mobile'=>$mobile,
            'whatsapp'=>1,
            'password'=>md5($password),
            'created_date' => $created_date,
        );

        $brokerData=array
        (
            'role_id'=>$role_id,
            'broker_id'=>$v_broker_id,
            'address'=>$address,
            'state'=>$state,
            'city'=>$city,
            'country'=>$country,
            'own_agency'=>'No',
            // 'organisation_name'=>$organisation_name,
            'owner_mobile'=>$owner_mobile,
            'owner_fullname'=>$owner_fullname,
            'owner_email'=>$owner_email
        );

        $res=$this->db->insert('tbl_user',$userData);
        if($res)
        {
            $this->db->insert('tbl_broker',$brokerData);
        }
    }

    // public function getEmailContent()
    // {
    //     $this->db->select('*');
    //     $this->db->from('email_content');
    // }

    public function getEmailContent()
    {
        $this->db->select('*');
        $this->db->from('email_content');
        return $this->db->get()->row();
    }

    public function getUsers($postData)
    {
        $response = array();
        if(isset($postData['search']) )
        {
            // Select record
            $this->db->select('*');
            $this->db->where("organisation_name like '%".$postData['search']."%' ");

            $records = $this->db->get('tbl_broker')->result();

            foreach($records as $row )
            {
                $response[] = array("value"=>$row->broker_id,"label"=>$row->organisation_name);
            }
        }
        return $response;
    }
}