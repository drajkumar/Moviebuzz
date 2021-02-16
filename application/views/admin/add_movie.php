<div class="container">
 <div class="row">
<div class="offset-md-2 col-md-8">
<?php print_r($error);?>
<?php echo validation_errors(); ?>
 <?php  
  if($this->session->flashdata('movie_add')){
    echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('movie_add').'</div>';
  }else{
    echo '';
  }

 ?>
<?php echo form_open_multipart('admin/uploadimg');?>
<!---<form method="post" action="<?php //echo site_url('admin/addmovie');?>" enctype="multipart/form-data" />-->
  <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Movie Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Movie name">
    
  </div>
  <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">IMDB Rating</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="rating" placeholder="Enter IMDB Rating">
    
  </div>
    <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Language</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="language" placeholder="Enter Language">
    
  </div>
    <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Quality</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="quality" placeholder="Enter Quality">
    
  </div>
    <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Size</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="moviesize" placeholder="Enter Size">
    
  </div>
    <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Director</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="director" placeholder="Enter Director">
    
  </div>
      <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Actors</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="actors" placeholder="Enter Actors">
    
  </div>
      <div class="form-group">
    <label style="color: #FFF;" for="exampleInputEmail1">Writers</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="writers" placeholder="Enter Writers">
    
  </div>
 
   <div class="form-group">
    <label style="color: #FFF;" for="exampleFormControlSelect1">Main Catagori</label>
    <select class="form-control" id="exampleFormControlSelect1" name="main_cata">
      <option value="">Select</option>
      <?php 
      
       foreach ($mainc as $key){
        
       ?>
      <option value="<?php echo $key['main_cata'] ?>"><?php echo $key['main_cata'] ?></option>
      
    <?php }?>
    </select>
  </div>

   <div class="form-group">
    <label style="color: #FFF;" for="exampleFormControlSelect1">Sub Catagori</label>
    <select class="form-control" id="exampleFormControlSelect1" name="sub_cata">
      <option value="">Select</option>
      <?php 
       foreach ($subc as $key){
       ?>
      <option value="<?php echo $key['sub_cata'] ?>"><?php echo $key['sub_cata'] ?></option>
       <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label style="color: #FFF;" for="exampleInputPassword1">Movie Watch url</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="wurl" placeholder="Movie Url">
  </div>
  <div class="form-group">
    <label style="color: #FFF;" for="exampleInputPassword1">Movie Download url</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="durl" placeholder="Movie Url">
  </div>
  <input type="file" name="userfile" required><br><br>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" name="submit" value="Add Movie">
</div>
</form>
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