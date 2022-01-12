<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('session');
    }

    public function user_register()
    {
        $this->load->view('auth/user_register');
    }

    public function saveUserData()
    {	
        $this->db->select('email');
        $this->db->from('tbl_user');
        $this->db->where('email', $this->input->post('email'));

        $result=$this->db->get()->result();

        if(!empty($result))
        {
            $message = "Email already exists.!!!. Please try again!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $this->load->view('userController/user_register');
        }

        else
        {
            $result=$this->user_model->saveUserData();
            if($result)
            {
                $message = "Registered Successfully!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $this->load->view('usercontroller/user_login');
            }
            else
            {
                $message = "Duplicate Enter Board !!!. Please try again!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $this->load->view('usercontroller/user_register');
            }
        }
    }

    public function user_login()
    {
        $this->load->view('auth/user_login');
    }

    public function auth()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Pwd','required');

        $email=$this->input->post('email');
        $pass=$this->input->post('password');

        $ceklogin=$this->user_model->login($email,md5($pass));

        if($ceklogin)
        {
            foreach($ceklogin as $row);
            $userdata=array();
            $userdata['id']=$row->id;
            $userdata['email']=$row->fullname;
            $userdata['role_id']=$row->role_id;
            // print_r($userdata['role_id']);die();
            $this->session->set_userdata($userdata);

            if($this->session->userdata('role_id')=='1')
            {
                $message = "Login Successful.!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                redirect('admin/index');
                // $data['main_content']='admin/include/main_content';
                // $this->load->view('admin/include/template', $data);
            }

            elseif($this->session->userdata('role_id')=='2')
            {
                $message = "Login Successful.!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $data['main_content']='user/include/main_content';
                $this->load->view('user/include/template', $data);
            }

            elseif($this->session->userdata('role_id')=='4')
            {
                $message = "Login Successful.!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $data['main_content']='user/include/main_content';
                $this->load->view('user/include/template', $data);
            }
        }
        else
        {
            $message = "Username and/or Password incorrect.Try again.!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $this->load->view('auth/login');
        }
    }

    public function saveBrokerData()
    {
        $this->db->select('email');
        $this->db->from('tbl_user');
        $this->db->where('email', $this->input->post('email'));

        $result=$this->db->get()->result();

        if(!empty($result))
        {
            $message = "Email already exists.!!!. Please try again!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $data['main_content']='main_page/include/main_content';
            $this->load->view('main_page/include/template', $data);
        }

        else
        {
            $result=$this->user_model->saveBrokerData();
            if($result)
            {
                $message = "Registered Successfully!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $data['main_content']='main_page/include/main_content';
                $this->load->view('main_page/include/template', $data);
            }
            else
            {
                $message = "Duplicate Enter Board !!!. Please try again!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $data['main_content']='main_page/auth/broker_signup';
                $this->load->view('main_page/include/template', $data);
            }
        }
    }

    public function saveOwnerData()
    {
        $this->db->select('email');
        $this->db->from('tbl_user');
        $this->db->where('email', $this->input->post('email'));

        $result=$this->db->get()->result();

        if(!empty($result))
        {
            $message = "Email already exists.!!!. Please try again!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $data['main_content']='main_page/include/main_content';
            $this->load->view('main_page/include/template', $data);
        }

        else
        {
            $result=$this->user_model->saveOwnerData();
            if($result)
            {
                $message = "Registered Successfully!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $data['main_content']='main_page/include/main_content';
                $this->load->view('main_page/include/template', $data);
            }
            else
            {
                $message = "Duplicate Enter Board !!!. Please try again!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $data['main_content']='main_page/auth/owner_details';
                $this->load->view('main_page/include/template', $data);
            }
        }
    }

    public function verfiyOwner()
    {
        $this->db->select('organisation_name');
        $this->db->from('tbl_broker');
        $this->db->where('organisation_name', $this->input->post('organisation_name'));

        $result=$this->db->get()->result();

        if(empty($result))
        {
            $this->send_emailtoOwner();
            $message = "Company is not registered !!!. Please contact owner to set-up company!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $data['main_content']='main_page/include/main_content';
            $this->load->view('main_page/include/template', $data);
        }
        else
        {
            $this->send_emailtoOwner();
            $this->send_emailtoEmployee();
            $result=$this->user_model->verfiyOwner();
            if($result)
            {
                $message = "Registered Successfully!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $data['main_content']='main_page/include/main_content';
                $this->load->view('main_page/include/template', $data);
            }
            else
            {
                $message = "Duplicate Enter Board !!!. Please try again!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $data['main_content']='main_page/auth/owner_verification';
                $this->load->view('main_page/include/template', $data);
            }
        }
    }

    public function send_emailtoOwner()
    {
        // $this->db->where('role_id',$role_id);
        $data=$this->db->get('email_content')->row();
        // print_r($data->title);

        //$subject = print_r($data->title);
        $subject = 'Broker Online - Company Registration';
     
        // $message = print_r($data->message);

        $message = 'Testing';

        $config['protocol']   = 'smtp';
        $config['smtp_host']  = 'ssl://smtp.gmail.com';
        $config['smtp_port']  = 465;
        $config['smtp_user']  = 'asmasultana377@gmail.com';
        $config['smtp_pass']  = 'asma@9094';
        $config['charset']    = 'iso-8859-1';
        $config['newline']    = "\r\n";
        $config['mailtype']   = 'html';
        $config['validation'] = TRUE;

        $this->load->library('email', $config);
        $this->email->from($this->input->post('email'),'Asma');
        $this->email->to($this->input->post('owner_email'));
        $this->email->subject($subject);
        $this->email->message($message);
        if($this->email->send())
        {
            // echo "sent successfully";
            $message = "Email sent successfully.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }

    public function send_emailtoEmployee()
    {
        $subject = 'Broker Online - Verify Email';
        $message =  "
            <html>
            <head>
            <title>Verification Code</title>
            </head>
            <body>
            <h2>Thank you for Registering.</h2>
            <p>Click below to verify your email and continue the registration process.</p>
            <h4><a href='#'>Click Here to Verify your Email</a></h4>
            </body>
            </html>
        ";

        $config['protocol']   = 'smtp';
        $config['smtp_host']  = 'ssl://smtp.gmail.com';
        $config['smtp_port']  = 465;
        $config['smtp_user']  = 'asmasultana377@gmail.com';
        $config['smtp_pass']  = 'asma@9094';
        $config['charset']    = 'iso-8859-1';
        $config['newline']    = "\r\n";
        $config['mailtype']   = 'html';
        $config['validation'] = TRUE;

        $this->load->library('email', $config);
        $this->email->from('asmasultana377@gmail.com','Asma');
        $this->email->to($this->input->post('email'));
        $this->email->subject($subject);
        $this->email->message($message);
        if($this->email->send())
        {
            // echo "sent successfully";
            $message = "Email sent successfully.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }

    public function unique_id()
    {
        // $number = range(0,999);
        // print_r ($number);
        // die();
        // $x = 'bkz';
        // $x++;
        // echo $x;
        // die();
        $this->db->select('*');
        $this->db->from('tbl_broker');
        $this->db->where('own_agency','No');
        $cc= $this->db->count_all_results()+1;
        $num = str_pad($cc, 0, STR_PAD_LEFT);
        $coun = str_pad($cc, 3, 0, STR_PAD_LEFT); // Updated line to include '0'
        // $x = 'bkr';
        // $x++;
        $id = "a"."-".'bkr'."-";
        $customid = $id.$coun."-".$num;
        echo $customid;
        // echo '<pre>';
        // print_r($cc);
        // echo '</pre>';
    }
}
