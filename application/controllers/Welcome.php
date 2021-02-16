<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
        {
	           parent::__construct();
                $this->load->model('movie_model');
                $this->load->helper('url');
                $this->load->library('pagination');
                $this->load->library('session');
                $this->load->helper(array('form', 'url'));
                
                //$this->load->library("pagination");
         } 

     public function get_header_m(){
         $data['mainc'] = $this->movie_model->get_main_cata();
         $data['subc'] = $this->movie_model->get_sub_cata();
              
			
		$this->load->view('header', $data);
     }


	public function index($offset = 0)
	{ 

		//   $moviess = $this->movie_model->get_count_all();
		
        // foreach ($moviess as $key => $value) {
		//       echo $value['title'];
		// 	 if($key % 2 == 0){
			
        //       echo '<p>jora</p><br/>';
		// 	 }else if($key % 2 == 1){
        //       echo '<p>bjora</p></br/>';
		// 	 }

			
			
			
		//  }

	

			$config['base_url'] = base_url() . "index.php/welcome/index";
			$config['total_rows'] = $this->movie_model->get_count();
			$config['per_page'] = 2;
			$config['uri_segment'] = 3;
			 $config['num_links'] = 2;


		    $config['first_link'] ='<span>First</span>';
		    $config['last_link'] = '<span>Last</span>';
		    $config['prev_link'] = '<p><</p>';
			$config['next_link'] = '<span>></span>';
           
            //
         
             $config['prev_tag_open'] = '<span>';
            $config['prev_tag_close'] = '</span>';
            $config['cur_tag_open'] = '<span>';
            $config['cur_tag_close'] = '</span>';
            $config['num_tag_open'] = '<span>';
            $config['num_tag_close'] = '</span>';

			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			 $data['count'] = $this->movie_model->get_count();
			   $data['movies'] = $this->movie_model->get_moviesp($config["per_page"], $page);

			   $data['pagi'] = $this->pagination->create_links();
				$this->get_header_m();
				$this->load->view('section', $data);
				$this->load->view('footer');
	}


	public function download_page($slug = null){
		$data['movie'] = $this->movie_model->download_view($slug);
		$data['letest'] = $this->movie_model->get_letest_movie();
		$data['comment'] = $this->movie_model->get_comment();
      $this->get_header_m();
      $this->load->view('download', $data);
      $this->load->view('footer');
	}


	public function search(){
       $data['movies'] = $this->movie_model->search_result();
       $this->get_header_m();
      $this->load->view('search', $data);
      $this->load->view('footer');
	}


	 public function getmovie_cata($slug = null){

	 
		$slugl = ucfirst($slug);
	    $info['movies'] = $this->movie_model->movie_main_cata($slugl);
        $this->get_header_m();
        $this->load->view('movies', $info);
        $this->load->view('footer');
	 }

	 public function getgneres($slug = null){
	 	$slugl = ucfirst($slug);
	    $info['movies'] = $this->movie_model->movie_sub_cata($slugl);
        $this->get_header_m();
        $this->load->view('gneres', $info);
        $this->load->view('footer');
	 }

	 public function contact_us(){
	 	        $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('message', 'Message', 'required');
                 if ($this->form_validation->run() == FALSE)
                {
				$data['letest'] = $this->movie_model->get_letest_movie();
			        $this->get_header_m();
			        $this->load->view('contactus', $data);
			        $this->load->view('footer');
				}else{
					 $this->movie_model->contact_create();
					 $this->session->set_flashdata('contact_add', 'Your message is seccessfully Sended');
                        redirect('contactus');
			    }
               
	 	
	 }

	 public function comment(){
	 	        $id = $this->input->post('reid');
	 	        $this->movie_model->comment_set();
				$this->session->set_flashdata('comment_add', 'Your Comment is seccessfully Created');
                redirect('download/'.$id);
	 }

	 public function aboutus(){
	 	$data['letest'] = $this->movie_model->get_letest_movie();
		$data['comment'] = $this->movie_model->get_comment();
      $this->get_header_m();
      $this->load->view('aboutus', $data);
      $this->load->view('footer');
	 }

	 public function disclaimer(){
	 	$data['letest'] = $this->movie_model->get_letest_movie();
		$data['comment'] = $this->movie_model->get_comment();
      $this->get_header_m();
      $this->load->view('disclaimer', $data);
      $this->load->view('footer');
	 }

	 public function dmca(){
	 	$data['letest'] = $this->movie_model->get_letest_movie();
		$data['comment'] = $this->movie_model->get_comment();
      $this->get_header_m();
      $this->load->view('disclaimer', $data);
      $this->load->view('footer');
	 }


}


?>
