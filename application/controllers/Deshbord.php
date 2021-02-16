<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deshbord extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('admin_model');
                $this->load->helper('url_helper');
                $this->load->helper(array('form', 'url'));
                //$this->load->helper('url');
                //$this->load->helper('form');
                $this->load->library("pagination");
                $this->load->library('session');
                $this->load->library('upload');
                if($_SESSION['admin_data'] != true){
                 redirect('errors/error_404');
                }
        }

public function index($offset = 0){

	   $config['base_url'] = base_url() . "index.php/deshbord/index";
            $config['total_rows'] = $this->admin_model->get_count();
            $config['per_page'] = 2;
            $config['uri_segment'] = 3;
             $config['num_links'] = 2;
             //$config['use_page_numbers'] = TRUE;
            //$config['page_query_string'] = TRUE;
             //$config['first_link'] = 'First';
                
            $config["first_link"] = '<li class="page-item"><p class="page-link">First</p></li>';
           
            $config["last_link"] = '<li class="page-item"><p class="page-link">Last</p></li>';
          
            $config['next_link'] = '<li class="page-item"><p class="page-link">Next</p></li>';
           
            $config['prev_link'] = '<li class="page-item"><p class="page-link">Previous</p></li>';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '<li>';
            $config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><p class="page-link">';
            $config['cur_tag_close'] = '</p></li>';
            $config['num_tag_open'] = '<li class="page-item"><p class="page-link">';
            $config['num_tag_close'] = '</p></li>';

            $this->pagination->initialize($config);
           $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

          // echo '<h1>'.$page.'</h1>';


      
        $data["links"] = $this->pagination->create_links();
        $data['movies'] = $this->admin_model->get_moviesp($config["per_page"], $page);
	    $data['page_num'] = $page;
		$this->load->view('admin/header');
		$this->load->view('admin/deshbord', $data);
		$this->load->view('admin/footer');
}


 public function set_catagore()
{
	$this->load->helper('form');
    $this->load->library('form_validation');

        $data['success'] = 'Catagori Successfully Created';
        $this->form_validation->set_rules('main', 'Main Catagori', 'required');
        $this->form_validation->set_rules('sub', 'Sub Catagori', 'required');
        if ($this->form_validation->run() == FALSE)
                {
		$this->load->view('admin/header');
		$this->load->view('admin/add_catagore');
		$this->load->view('admin/footer');
		}else{
			$this->admin_model->set_catagore();
	        $this->load->view('admin/header');
			$this->load->view('admin/add_catagore', $data);
			$this->load->view('admin/footer');
	    }
}

 public function view_catagori(){
 	       $data['catagori'] = $this->admin_model->get_cata_all();
 	        $this->load->view('admin/header');
			$this->load->view('admin/view_catagori', $data);
			$this->load->view('admin/footer');
 }

 public function edit_catagori($slug = NULL){
            $data['catag'] = $this->admin_model->get_edit_cata($slug);

 	        $this->load->view('admin/header');
			$this->load->view('admin/edit_catagori', $data);
			$this->load->view('admin/footer');

 }

 public function do_edit_cata(){
   $this->admin_model->update_cata();
    $this->session->set_flashdata('Update_cata', 'Catagori is seccessfully Updated');
    redirect('admin/getchatagori', 'refresh');
 }


 public function remove_cata($slug){
 	$this->admin_model->delete_cata($slug);
 	$this->session->set_flashdata('remove_cata', 'Catagori is seccessfully Deleted');
    redirect('admin/getchatagori', 'refresh');
 }


 public function viewmessage(){
    $data['contact'] = $this->admin_model->get_message();
            $this->load->view('admin/header');
            $this->load->view('admin/viewmessage', $data);
            $this->load->view('admin/footer');
 }

 public function remove_message($slug = null){
    $this->admin_model->removemess($slug);
    $this->session->set_flashdata('remove_message', 'Message is seccessfully Deleted');
    redirect('admin/viewmessage');
 }

 public function viewcomment(){
    $data['comment'] = $this->admin_model->get_comment();
            $this->load->view('admin/header');
            $this->load->view('admin/viewcomment', $data);
            $this->load->view('admin/footer');
 }

  public function remove_comment($slug = null){
    $this->admin_model->removecom($slug);
    $this->session->set_flashdata('remove_comment', 'Comment is seccessfully Deleted');
    redirect('admin/viewcomment');
 }

 public function update_comment($slug = null){
    $this->admin_model->updatecom($slug );
     $this->session->set_flashdata('update_comment', 'Comment is seccessfully Accepted');
    redirect('admin/viewcomment');
 }





 



}

