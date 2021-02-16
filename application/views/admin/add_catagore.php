<div style="background: #666;" class="container-fluid">
 <?php echo validation_errors(); ?>
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <?php 
       if(isset($success)){
        
        ?>
        <div class="alert alert-success" role="alert">
          <?php  echo $success; ?>
        </div>
        <?php
       }

       ?>
<?php echo form_open('admin/addchatagori'); ?>
  <div class="form-group">
    <label for="email">Add Main Catagori:</label>
    <input type="text" class="form-control" id="main" name="main">
  </div>
  <div class="form-group">
    <label for="email">Add Sub Catagori:</label>
    <input type="text" class="form-control" id="sub" name="sub">
  </div>


  <input style="" type="submit" class="btn btn-primary" name="submit" value="Add Catagori">
</form>


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