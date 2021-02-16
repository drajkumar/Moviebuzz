<div class="container">
 <div class="row">
<div class="col-md-6">
	<?php echo form_open_multipart('admin/update_picture');?>
    <img class="img-fluid" alt="Responsive image" src="<?php echo base_url()?>uploads/<?php echo $movie['picture'] ?>"><br/><br/>
    <input type="file" name="userfile" required><br/><br/>
    <input type="hidden" name="id" value="<?php echo $movie['id'] ?>"> 
    <input type="hidden" name="page_num_v" value="<?php echo $r_page; ?>"> 
    <input type="hidden" name="image" value="<?php echo $image; ?>">

 <input type="submit" class="btn btn-primary" name="submit" value="Update Picture">

   </form>

   </div>
  </div>
</div>