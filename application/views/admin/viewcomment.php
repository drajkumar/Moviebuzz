<div style="background: #666;" class="container-fluid">
 
  <div class="row">
    <div class="col-md-12">

 <?php  

  if($this->session->flashdata('remove_comment')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('remove_comment').'</div>';
  }else{
    echo '';
  }
  if($this->session->flashdata('update_comment')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('update_comment').'</div>';
  }else{
    echo '';
  }
 ?>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      
      <th scope="col">Comment</th>
      <th scope="col">Status</th>
     <th scope="col">Accept</th>
      <th scope="col">Delete</th>
    
      
    </tr>
  </thead>
  <tbody>
         <?php
      $x = 0;
      foreach ($comment as $movie):
      $x++;

      ?>
    <tr>
 

      <th scope="row"><?php echo $x; ?></th>
      <td><?php echo $movie['name'];?></td>
      <td><?php echo $movie['email'];?></td>
      <td><?php echo $movie['comment'];?></td>
      <td>

        <?php 
        if($movie['status'] == 0){
         echo 'Padding';
        }else{
        echo 'Accepeted';  
        }
         ?> 

        </td>
     


   <?php 

   //$array = array($movie['id'], $page_num); 
   //$str = $this->uri->assoc_to_uri($array);

   //print_r($str);

    ?>

   <?php
    $id = $movie['id'];

     ?>

     <td><a href="<?php echo site_url("admin/update_comment/$id"); ?>" class="btn btn-success" >Accept</a></td>
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
        <a href="<?php echo site_url("admin/remove_comment/$id"); ?>" class="btn btn-danger">Delete</a>
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
 

</div>


<div style="background: #666;" class="container-fluid">
 
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <p>Develop by Black stone</p>
      <p>Desgin by Black stone</p>
    </div>
    
  </div>
</div>