<div style="background: #666;" class="container-fluid">

  <div class="row">
    <div class="offset-md-3 col-md-6">
   
     
<?php //echo form_open('admin/do_edit_cata'); ?>
<form action="<?php echo site_url('admin/do_edit_cata'); ?>" method="post">

  <div class="form-group">
    <label for="email">Add Main Catagori:</label>
    <input type="text" class="form-control" id="main" name="main" value="<?php echo $catag['main_cata'];?>">
  </div>
  <div class="form-group">
    <label for="email">Add Sub Catagori:</label>
    <input type="text" class="form-control" id="sub" name="sub" value="<?php echo $catag['sub_cata'];?>">
  </div>

  <input type="hidden" class="form-control" id="cata_id" name="cata_id" value="<?php echo $catag['cata_id'];?>">
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