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
<?php echo form_open('admin/register'); ?>
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="email">Password:</label>
    <input type="password" class="form-control" id="email" name="password">
  </div>
  <div class="form-group">
    <label for="pwd">Password Confrim:</label>
    <input type="password" class="form-control" id="pwd" name="passconf">
  </div>

  <input style="" type="submit" class="btn btn-primary" name="submit" value="Add Admin">
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