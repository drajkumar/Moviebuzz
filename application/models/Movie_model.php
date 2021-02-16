<?php
class Movie_model extends CI_Model {

	 public function __construct()
        {
                $this->load->database();
              
        }



 

    public function get_main_cata(){
   $query = $this->db->query('SELECT DISTINCT main_cata FROM caragori');
     return $query->result_array();
}

public function get_sub_cata(){
    $query = $this->db->query('SELECT DISTINCT sub_cata FROM caragori');
     return $query->result_array();
} 

    public function get_moviesp($limit, $start) {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('movies', $limit, $start);
        //$this->db->limit($limit, $start);
        //
        //$query = $this->db->get('movies');

        return $query->result_array();
    }

       public function get_count() {
        return $this->db->count_all('movies');
    }

      public function get_count_all() {
        $query = $this->db->get('movies');
        return $query->result_array();
    }



    public function download_view($slug){
     $query = $this->db->get_where('movies', array('id' => $slug));
        return $query->row_array();
    }

    public function get_letest_movie(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('movies', 9);
        return $query->result_array();
    }

    public function search_result(){
        $title = $this->input->post('title');
        //$this->db->select('*');
        //$this->db->from('movies');
         //$this->db->get('movies');
        $this->db->like('title', $title);
        $query = $this->db->get('movies');
         return $query->result_array();
    }

    public function movie_main_cata($slug){
        $query = $this->db->get_where('movies', array('main_cata' => $slug));
        return $query->result_array();
    }

     public function movie_sub_cata($slug){
        $query = $this->db->get_where('movies', array('sub_cata' => $slug));
        return $query->result_array();
    }


    public function contact_create(){
          $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'message' => $this->input->post('message')
        
    );

  return $this->db->insert('contactus', $data);
    }


    public function comment_set(){
          $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'comment' => $this->input->post('comment'),
        'status' => 0
        
    );

  return $this->db->insert('coment', $data);
    }

    public function get_comment(){
        $query = $this->db->get_where('coment', array('status' => 1));
        return $query->result_array();
    }






}

?>