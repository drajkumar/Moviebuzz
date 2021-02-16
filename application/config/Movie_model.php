<?php
class Movie_model extends CI_Model {

	 public function __construct()
        {
                $this->load->database();
              
        }



    public function get_count() {
        return $this->db->count_all('movies');
    }

    public function get_main_cata(){
   $query = $this->db->query('SELECT DISTINCT main_cata FROM caragori');
     return $query->result_array();
}

public function get_sub_cata(){
    $query = $this->db->query('SELECT DISTINCT sub_cata FROM caragori');
     return $query->result_array();
} 



}

?>