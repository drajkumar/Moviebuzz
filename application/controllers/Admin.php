<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct()
        {
                parent::__construct();
                $this->load->model('admin_model');
                $this->load->helper('url_helper');
                 $this->load->library('session');
                 
                  if($_SESSION['admin_data'] != true){
                   redirect('errors/error_404');
                  }
        }

	public function register()
	{
		$this->load->helper('form');
        $this->load->library('form_validation');

        $data['success'] = 'Admin account Successfully Created';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		

		if ($this->form_validation->run() == FALSE)
                {
		$this->load->view('admin/header');
		$this->load->view('admin/register');
		$this->load->view('admin/footer');
		}else{
			$this->admin_model->set_admin();
	        $this->load->view('admin/header');
			$this->load->view('admin/register', $data);
			$this->load->view('admin/footer');
	    }
  }

 

}