<?php
class Adminlogin_model extends CI_Model {

	public $userdata;

	 public function __construct()
        {
                $this->load->database();
        }

     public function do_login(){
     	        //$query = $this->db->get('admin');
               // return $query->result_array();
           $email = $this->input->post('email');
     	   $password = $this->input->post('password');
           $hash = hash('sha256', $password);


        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $email);
        $this->db->where('password', $hash);
        $this->db->limit(1);
        $query = $this->db->get();
         $this->userdata = $query->result();
        
        if ($query->num_rows() == 1) {
			return true;
			} else {
			return false;
			}

       
        }

        public function get_user_data(){
        	return  $this->userdata;
        }


  

}