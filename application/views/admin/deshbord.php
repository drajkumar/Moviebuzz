<div style="background: #666;" class="container-fluid">
 
  <div class="row">
    <div class="col-md-12">

 <?php  
  if($this->session->flashdata('movie_add')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('movie_add').'</div>';
  }else{
    echo '';
  }
    if($this->session->flashdata('movie_edit')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('movie_edit').'</div>';
  }else{
    echo '';
  }
   if($this->session->flashdata('movie_pic')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('movie_pic').'</div>';
  }else{
    echo '';
  }
  if($this->session->flashdata('remove_movie')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('remove_movie').'</div>';
  }else{
    echo '';
  }
 ?>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Picture</th>
      
      <th scope="col">Main cata</th>
      <th scope="col">Sub cata</th>
      <th scope="col">Rating</th>
      <th scope="col">Quality</th>
      <th scope="col">Moviesize</th>
      
      <th scope="col">Watch url</th>
      <th scope="col">Download url</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    
      
    </tr>
  </thead>
  <tbody>
         <?php
      $x = 0;
      foreach ($movies as $movie):
      $x++;

      ?>
    <tr>
 

      <th scope="row"><?php echo $x; ?></th>
      <td><?php echo $movie['title'];?></td>
      <td><img class="poster" src="<?php echo base_url()?>uploads/<?php echo $movie['picture'] ?>" width="100" height="100"></td>
      <td><?php echo $movie['main_cata'];?></td>
      <td><?php echo $movie['sub_cata'];?></td>
      <td><?php echo $movie['rating'];?></td>
      <td><?php echo $movie['quality'];?></td>
      <td><?php echo $movie['moviesize'];?></td>
      <td><?php echo $movie['wurl'];?></td>
      <td><?php echo $movie['durl'];?></td>
     


   <?php 

   //$array = array($movie['id'], $page_num); 
   //$str = $this->uri->assoc_to_uri($array);

   //print_r($str);

    ?>

   <?php
    $id = $movie['id'];
    $image = $movie['picture'];

     ?>

      <td><a href="<?php echo site_url("admin/edit_movie/$id/$page_num") ?>" class="btn btn-info">Edit</a></td>
      <td>

        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $id;?>">Delete</a>
                <!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delete Catagori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure Delete This?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        <a href="<?php echo site_url("admin/remove_movie/$id/$page_num"); ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
      </td>
    
    </tr>
  
   <?php  endforeach; ?>
  </tbody>
</table>

    </div>
    
  </div>
</div><br>

<div style="background: #666;" class="container">
 
  <div class="row">
    <div class="offset-md-3 col-md-6">
    <nav aria-label="Page navigation example">
       <ul class="pagination">
    <?php echo $links; ?>
    
  </ul>
</nav>


    </div>
    
  </div>
</div>


<div style="background: #666;" class="container-fluid">
 
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <p>Develop by Black stone</p>
      <p>Desgin by Black stone</p>
    </div>
    
  </div>
</div>