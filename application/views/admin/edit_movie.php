<div class="container">
 <div class="row">
<div class="col-md-6">
<?php //print_r($error);?>

 <?php  
  if($this->session->flashdata('movie_add')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('movie_add').'</div>';
  }else{
    echo '';
  }

 ?>
<?php echo form_open_multipart('admin/update_movie');?>
<!---<form method="post" action="<?php //echo site_url('admin/addmovie');?>" enctype="multipart/form-data" />-->
  <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Movie Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $movie['title']?>" placeholder="Enter Movie name">
    
  </div>
  <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">IMDB Rating</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="rating" value="<?php echo $movie['rating']?>" placeholder="Enter IMDB Rating">
    
  </div>
    <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Language</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="language" value="<?php echo $movie['language']?>" placeholder="Enter Language">
    
  </div>
    <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Quality</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="quality" value="<?php echo $movie['quality']?>" placeholder="Enter Quality">
    
  </div>
    <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Size</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="moviesize" value="<?php echo $movie['moviesize']?>" placeholder="Enter Size">
    
  </div>
    <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Director</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="director" value="<?php echo $movie['director']?>" placeholder="Enter Director">
    
  </div>
      <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Actors</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="actors" value="<?php echo $movie['actors']?>" placeholder="Enter Actors">
    
  </div>
      <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Writers</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="writers" value="<?php echo $movie['writers']?>" placeholder="Enter Writers">
    
  </div>
 
   <div class="form-group">
    <label style="color: #FFF;" for="exampleFormControlSelect1">Main Catagori</label>
    <select class="form-control" id="exampleFormControlSelect1" name="main_cata">
      
      <?php 

      
      $result = array();
      $array = $movie['main_cata'];
      $main_c_get = array();
       foreach ($mainc as $key){
        $main_c_get[] = $key['main_cata'];
      }

      array_unshift($main_c_get,  $array);

      $result = array_unique($main_c_get);


  

      
       foreach ($result as $key => $value){
        
       ?>
      <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
      
    <?php }?>
    </select>
  </div>

   <div class="form-group">
    <label style="color: #FFF;" for="exampleFormControlSelect1">Sub Catagori</label>
    <select class="form-control" id="exampleFormControlSelect1" name="sub_cata">
      
      <?php 
      $result = array();
      $array = $movie['sub_cata'];
      $sub_c_get = array();
       foreach ($subc as $key){
        $sub_c_get[] = $key['sub_cata'];
      }

      array_unshift($sub_c_get,  $array);

      $result = array_unique($sub_c_get);

       foreach ($result as $key => $value){
       ?>
      <option value="<?php echo $value ?>"><?php echo $value ?></option>
       <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label style="color: #FFF;" for="exampleInputPassword1">Movie Watch url</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="wurl" value="<?php echo $movie['wurl']?>" placeholder="Movie Url">
  </div>
  <div class="form-group">
    <label style="color: #FFF;" for="exampleInputPassword1">Movie Download url</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="durl" value="<?php echo $movie['durl']?>" placeholder="Movie Url">
  </div>
  
  <div class="form-group">
   <input type="hidden" name="page_num_v" value="<?php echo $r_page; ?>"> 
   <input type="hidden" name="mo_id" value="<?php echo $movie['id'] ?>">
  <input type="submit" class="btn btn-primary" name="submit" value="Update Movie">
</div>
</form>
  </div>

  <div class="col-md-6"><br/><br/>
    <?php 

    $id = $movie['id'] ;
    $picture = $movie['picture'];

    ?>
    <img class="img-fluid" alt="Responsive image" src="<?php echo base_url()?>uploads/<?php echo $movie['picture'] ?>"><br/><br/>
    

    <a href="<?php echo site_url("admin/edit_movie_pic/$id/$r_page/$picture") ?>" class="btn btn-info">Edit</a>
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