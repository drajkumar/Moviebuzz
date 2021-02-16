<?php
class Admin_model extends CI_Model {

	 public function __construct()
        {
                $this->load->database();
              
        }

   public function set_admin(){
    $this->load->helper('url');

    $password = $this->input->post('password');
  
  $hash = hash('sha256', $password);
    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'password' => $hash,
        'status' => 1
    );

    return $this->db->insert('admin', $data);
}

public function get_admin()
{

}

// catagori content

public function set_catagore()
{
    $this->load->helper('url');
      $data = array(
        'main_cata' => $this->input->post('main'),
        'sub_cata' => $this->input->post('sub')
    );
      return $this->db->insert('caragori', $data);
}

public function get_cata_all(){
    $query = $this->db->get('caragori');
     return $query->result_array();
}

public function get_main_cata(){
   $query = $this->db->query('SELECT DISTINCT main_cata FROM caragori');
     return $query->result_array();
}

public function get_sub_cata(){
    $query = $this->db->query('SELECT DISTINCT sub_cata FROM caragori');
     return $query->result_array();
}

public function get_edit_cata($slug){
     $query = $this->db->get_where('caragori', array('cata_id' => $slug));
        return $query->row_array();
}

public function update_cata(){
  $id = $this->input->post('cata_id');

   $data = array(
        'main_cata' => $this->input->post('main'),
        'sub_cata' => $this->input->post('sub')
    );
    $this->db->update('caragori', $data, array('cata_id' => $id));

}

public function delete_cata($slug){
    $this->db->delete('caragori', array('cata_id' => $slug));
}

//end catagori content

//start movie content

public function set_movie($field_name){
 
  $data = array(
        'title' => $this->input->post('title'),
        'rating' => $this->input->post('rating'),
        'language' => $this->input->post('language'),
        'quality' => $this->input->post('quality'),
        'moviesize' => $this->input->post('moviesize'),
        'director' => $this->input->post('director'),
        'actors' => $this->input->post('actors'),
        'writers' => $this->input->post('writers'),
        'main_cata' => $this->input->post('main_cata'),
        'sub_cata' => $this->input->post('sub_cata'),
        'wurl' => $this->input->post('wurl'),
        'durl' => $this->input->post('durl'),
        'picture' => $field_name,
        'status' => 1
    );

  return $this->db->insert('movies', $data);
     

}


    public function get_count() {
        return $this->db->count_all('movies');
    }

    public function get_moviesp($limit, $start) {
        
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('movies', $limit, $start);
        //$this->db->limit($limit, $start);
        //
        //$query = $this->db->get('movies');

        return $query->result_array();
    }

    public function get_update_movie($slug){
     $query = $this->db->get_where('movies', array('id' => $slug));
        return $query->row_array();
    }


    public function update_movie_with_image(){
       $data = array(
        'title' => $this->input->post('title'),
        'rating' => $this->input->post('rating'),
        'language' => $this->input->post('language'),
        'quality' => $this->input->post('quality'),
        'moviesize' => $this->input->post('moviesize'),
        'director' => $this->input->post('director'),
        'actors' => $this->input->post('actors'),
        'writers' => $this->input->post('writers'),
        'main_cata' => $this->input->post('main_cata'),
        'sub_cata' => $this->input->post('sub_cata'),
        'wurl' => $this->input->post('wurl'),
        'durl' => $this->input->post('durl'),
        'picture' => $field_name,
        'status' => 1
    );
    }

    public function update_movie($id){
        //$id = $this->input->post('mo_id');

        $data = array(
        'title' => $this->input->post('title'),
        'rating' => $this->input->post('rating'),
        'language' => $this->input->post('language'),
        'quality' => $this->input->post('quality'),
        'moviesize' => $this->input->post('moviesize'),
        'director' => $this->input->post('director'),
        'actors' => $this->input->post('actors'),
        'writers' => $this->input->post('writers'),
        'main_cata' => $this->input->post('main_cata'),
        'sub_cata' => $this->input->post('sub_cata'),
        'wurl' => $this->input->post('wurl'),
        'durl' => $this->input->post('durl')
       
    );

        $this->db->update('movies', $data, array('id' => $id));

    }


    public function get_image($slug){
     $query = $this->db->get_where('movies', array('id' => $slug));
        return $query->row_array();
    }

    public function picture_update($id, $field_name){
       $data = array(

        'picture' => $field_name
 
       );
       $this->db->update('movies', $data, array('id' => $id));
    }


    public function remove_movie($slug){
      $query = $this->db->get_where('movies', array('id' => $slug));
     $result = $query->row_array();
     $img = $result['picture'];
      $this->db->delete('movies', array('id' => $slug));
      unlink('./uploads/'.$img);
    }


//end movie content

    public function get_message(){
        $this->db->order_by('id', 'DESC');
    $query = $this->db->get('contactus');
     return $query->result_array();
   }

   public function removemess($slug){
     $this->db->delete('contactus', array('id' => $slug));
   }

       public function get_comment(){
        $this->db->order_by('id', 'DESC');
    $query = $this->db->get('coment');
     return $query->result_array();
   }

     public function removecom($slug){
     $this->db->delete('coment', array('id' => $slug));
   }

   public function updatecom($slug){
    $data = array(
        'status' => 1
    );
    $this->db->update('coment', $data, array('id' => $slug));
   }



}