<div class="mid-down">
			<div class="response-box1">
				<div class="text-holder">
				  	<h3>Contact Us</h3>
				  	<div class="comment-box">
				  		<h2>You can try Contact Us</h2>
				  		<?php
                           if($this->session->flashdata('contact_add')){
							    echo '<p class="message" role="alert">'.$this->session->flashdata('contact_add').'</p>';
							  }else{
							    echo '';
							  }
						 ?>
				  		<?php echo validation_errors(); ?>
						<?php echo form_open('contactus'); ?>
							<h5>Your Name*</h5>
							<input type="text" name="name" maxlength="100" required="required">
							<h5>Your Email*</h5>
							<input type="email" name="email" maxlength="100" required="required">
							<h5>Mail Content*</h5>
							<textarea width="100%" name="message" required="required"></textarea>
							<br>
							<input type="submit" class="submit-but" value="Send Message">
							<br>
						</form>	
						<br>				
					</div>
					<br>
				  	<p>
					Direct Mail Us: <b>MovieBuzz</b>
					</p>
				</div>
				<br><br><br>
				
			</div>
			<div class="response-box2">
				<h3>
					You may also like
				</h3>
				<?php   

                 foreach ($letest as $movi) {

				?>
				<div class="items">
				<a href="<?php echo site_url('download/'.$movi['id']); ?>">
					<img class="poster" src="<?php echo base_url()?>uploads/<?php echo $movi['picture'] ?>" width="100%" height="100%">
					<div class="item-des">
						<button>Download</button>
						<p>
							<b><?php echo $movi['title']?></b>
							<br>
							Click to download
						</p>
					</div>
					</a>
				</div>
				<?php  }?>
				
				
			</div>
		</div>