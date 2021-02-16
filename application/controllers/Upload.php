<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('admin_model');
                $this->load->library('session');
                $this->load->helper(array('form', 'url'));
                if($_SESSION['admin_data'] != true){
                 redirect('errors/error_404');
                }
        }

        public function index()
        {
               // $this->load->view('upload_form', array('error' => ' ' ));
                 //$error = array('error' => $this->upload->display_errors());
                        $data['mainc'] = $this->admin_model->get_main_cata();
                        $mainc = $data['mainc'];
                        $data['subc'] = $this->admin_model->get_sub_cata();
                        $subc	 = $data['subc'];
                        
                        $this->load->view('admin/header');
			$this->load->view('admin/add_movie', array('error' => '',  'mainc' => $mainc, 'subc' => $subc));
			$this->load->view('admin/footer');
                        
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->load->library('form_validation');

                $this->form_validation->set_rules('title', 'Movie Title', 'required');
                $this->form_validation->set_rules('main_cata', 'Main cata', 'required');
                $this->form_validation->set_rules('sub_cata', 'sub_cata', 'required');
                $this->form_validation->set_rules('userfile', 'Image', 'required');

                if ( ! $this->upload->do_upload('userfile') AND $this->form_validation->run() == FALSE)
                {
                        $error = array('error' => $this->upload->display_errors());
                        $data['mainc'] = $this->admin_model->get_main_cata();
                        $mainc = $data['mainc'];
                        $data['subc'] = $this->admin_model->get_sub_cata();
                        $subc	 = $data['subc'];
                        
                        $this->load->view('admin/header');
			$this->load->view('admin/add_movie', array('error' => $error,  'mainc' => $mainc, 'subc' => $subc));
			$this->load->view('admin/footer');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $file_name = $this->upload->data('file_name');

                        $this->admin_model->set_movie($file_name);

                       
                        
                        

                       $this->session->set_flashdata('movie_add', 'Movie is seccessfully Created');
                        redirect('admin/addmovieview');
                }



        }



        public function edit_movie_view($slug = null, $num = null){
                    $slug =  $this->uri->segment(3);
                    $num =  $this->uri->segment(4);

                   
                        $data['mainc'] = $this->admin_model->get_main_cata();
                        $mainc = $data['mainc'];
                        $data['subc'] = $this->admin_model->get_sub_cata();
                        $subc	 = $data['subc'];
                        $data['movie'] = $this->admin_model->get_update_movie($slug);
                        $movie = $data['movie'];
                        //$data['r_page'] = $num;

	               $this->load->view('admin/header');
	               $this->load->view('admin/edit_movie', array('error' => '',  'mainc' => $mainc, 'subc' => $subc, 'movie'=>$movie, 'r_page' => $num));
	               $this->load->view('admin/footer');
        }



         public function do_upload_edit()
        {

        	$id = $this->input->post('mo_id');

            $this->admin_model->update_movie($id);
            $this->session->set_flashdata('movie_edit', 'Movie is seccessfully Updated');    
          
                       
                        
             $page = $this->input->post('page_num_v');
        	if($page == 0){
             redirect('deshbord/index');
        	}else{
        	redirect('deshbord/index/'.$page);	
        	} 
        }


        public function edit_movie_view_pic($slug = null, $num = null){
        	        $slug =  $this->uri->segment(3);
                    $num =  $this->uri->segment(4);
                    $image =  $this->uri->segment(5);

                    $data['movie'] = $this->admin_model->get_image($slug);
                    $movie = $data['movie'];

                    $this->load->view('admin/header');
				    $this->load->view('admin/view_image', array( 'movie'=> $movie, 'r_page' => $num, 'image'=> $image));
				    $this->load->view('admin/footer');
        }


        public function edit_picture(){

        	    $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                      
						$this->load->view('admin/upload_error', array('error' => $error));
						
                }
                else
                {
                	    $id = $this->input->post('id');
                        $data = array('upload_data' => $this->upload->data());
                        $file_name = $this->upload->data('file_name');
  
                        $this->admin_model->picture_update($id, $file_name);

                       
                        
                        $image = $this->input->post('image');
                        //$path = base_url().'uploads/'.$image;
                        unlink('./uploads/'.$image);

                       $this->session->set_flashdata('movie_pic', 'Picture is seccessfully Updated');


                       $page = $this->input->post('page_num_v');
			        	if($page == 0){
			             redirect('deshbord/index');
			        	}else{
			        	redirect('deshbord/index/'.$page);	
			        	}
                        redirect('admin/addmovieview');
                     }

               

        }




        public function remove_movie($slug, $num){

                    $slug =  $this->uri->segment(3);
                    
                


         $this->admin_model->remove_movie($slug);
         

         $this->session->set_flashdata('remove_movie', 'Movie is seccessfully Deleted');
                       $page = $this->uri->segment(4);
                        if($page == 0){
                         redirect('deshbord/index');
                        }else{
                        redirect('deshbord/index/'.$page);  
                        }
                     

        }





}
?>