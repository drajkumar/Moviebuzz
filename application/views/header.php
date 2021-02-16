
<!DOCTYPE html>
<html>
<head>
	<title>Movie Buzz</title>
	<link rel="icon" href="<?php echo base_url()?>images/logo.jpg" sizes="32x32" type="image/jpg">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body>


	<div id="whole">
		<div class="header">
			<div class="logo">
				<img src="<?php echo base_url()?>images/logo.jpg" width="100%" height="100%">
			</div>

			<div class="main-menu-holder">
				<div class="search">
					<?php echo form_open('search'); ?>
						<input type="text" name="title" id="search-box" placeholder="Search movie" required>
						<input type="submit" class="search-but" value="Search">
					</form>
				</div>
				<br>
			  	<ul class="header-menu-holder">
			  		<?php  foreach ($mainc as $key ) {

			  			
			  			
			  		?>
				  <li><a href="<?php echo site_url('movies/'.lcfirst($key['main_cata'])) ?>"><?php echo $key['main_cata']?></a></li>
				  <?php  } ?>
				</ul> 
			</div> 

			
		</div>
		<div class="all-sub-menus">
			<ul class="sub-menu-holder">
			  
			  <?php  foreach ($subc as $key ) {
			  			
			  		?>
				  <li class="sub-menu"><a href="<?php echo site_url('gneres/'.lcfirst($key['sub_cata'])) ?>"><?php echo $key['sub_cata']?></a></li>
				  <?php  } ?>
			  
			</ul> 
		</div>