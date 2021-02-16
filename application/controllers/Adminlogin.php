<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('adminlogin_model');
                $this->load->helper('url_helper');
                $this->load->helper('url');
                $this->load->library('session');
        }

	public function login()
	{
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
        $error['error'] = 'Username and password is incorrect';
		$success['success'] = 'You are login';
        
		if ($this->form_validation->run() == FALSE)
                {
		$this->load->view('admin/adminlogin');
		}else{
            $id = '';
            $name = '';
			$result = $this->adminlogin_model->do_login();
            $data = $this->adminlogin_model->get_user_data();
            if(empty($data)){
            echo '';
            }else{
            $id =  $data[0]->id;
            $name = $data[0]->name;
            }
            
            $session_data = array('id' => $id, 'name' => $name);
			if($result == true){
				$this->session->set_userdata('admin_data', $session_data);
				redirect('admin/deshbord', 'refresh');	
            
			}else{
			 $this->load->view('admin/adminlogin', $error);
			}

			
	    }
        
	   
	}

	public function logout(){
		unset($_SESSION['admin_data']['id']);
		unset($_SESSION['admin_data']['name']);
		redirect('admin/login', 'refresh');
	}
}
