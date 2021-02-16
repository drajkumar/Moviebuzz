<div style="background: #666;" class="container-fluid">

  <div class="row">
    <div class="offset-md-2 col-md-8">
      
  <?php  
  if($this->session->flashdata('Update_cata')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('Update_cata').'</div>';
  }else{
    echo '';
  }

 ?> 
   <?php  
  if($this->session->flashdata('remove_cata')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('remove_cata').'</div>';
  }else{
    echo '';
  }

 ?> 
  
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Main Cata</th>
      <th scope="col">Sub Cata</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
         <?php
      $x = 0;
      foreach ($catagori as $key):
      $x++;

      ?>
    <tr>
 

      <th scope="row"><?php echo $x; ?></th>
      <td><?php echo $key['main_cata'];?></td>
      <td><?php echo $key['sub_cata'];?></td>
      <td><a href="<?php echo site_url('admin/edit_catagori/'.$key['cata_id']); ?>" class="btn btn-info">Edit</a></td>
      <td>

        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key['cata_id'];?>">Delete</a>
                <!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php echo $key['cata_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <a href="<?php echo site_url('admin/remove_catagori/'.$key['cata_id']); ?>" class="btn btn-danger">Delete</a>
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

<div style="background: #666;" class="container-fluid">
 
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <p>Develop by Black stone</p>
      <p>Desgin by Black stone</p>
    </div>
    
  </div>
</div>