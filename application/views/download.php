<div class="mid-down">


<?php
                           if($this->session->flashdata('comment_add')){
							    echo '<p class="message" role="alert">'.$this->session->flashdata('comment_add').'</p>';
							  }else{
							    echo '';
							  }
						 ?>


			<div class="response-box1">
				<h3>
				<?php echo $movie['title'];?>
				</h3>
				<div class="big-poster">
					<img src="<?php echo base_url()?>uploads/<?php echo $movie['picture'] ?>" width="100%" height="100%">
				</div>
				<div class="movie-info">
					<table>
						<tr>
							<td class="ltd">IMDB Rating</td>
							<td class="rtd"><?php echo $movie['rating'] ?></td>
						</tr>
						<tr>
							<td class="ltd">Gneres</td>
							<td><?php echo $movie['sub_cata'] ?></td>
						</tr>
						<tr>
							<td class="ltd">Language</td>
							<td><?php echo $movie['language'] ?></td>
						</tr>
						<tr>
							<td class="ltd">Quality</td>
							<td><?php echo $movie['quality'] ?></td>
						</tr>
						<tr>
							<td class="ltd">Size</td>
							<td><?php echo $movie['moviesize'] ?>mb</td>
						</tr>
						<tr>
							<td class="ltd">Director</td>
							<td><?php echo $movie['director'] ?></td>
						</tr>
						<tr>
							<td class="ltd">Actors</td>
							<td><?php echo $movie['actors'] ?></td>
						</tr>
						<tr>
							<td class="ltd">Writers</td>
							<td><?php echo $movie['writers'] ?></td>
						</tr>
					</table>
				</div>
				<div class="download-link-box">
					<h4>
						Watch Online
					</h4>
					<div class="streaming-links">
						<ul class="links-holder">
						  	<li><a href="<?php echo $movie['wurl'] ?>" target="_blank">Watch Online</a></li>
						</ul> 
					</div>
					<h4>
						Download links
					</h4>
					<div class="download-links">
						<ul class="links-holder">
						  	<li><a href="<?php echo $movie['durl'] ?>" target="_blank">download here</a></li>
						  
						</ul>
					</div>						
				</div>
				<div class="comment-box">
					<h3>
						Comments
					</h3>
					<?php echo form_open('comment'); ?>
						<h5>Your Name*</h5>
						<input type="text" name="name" maxlength="50" required="required">
						<h5>Your Email*</h5>
						<input type="email" name="email" maxlength="70" required="required">
						<h5>Your Comment*</h5>
						<textarea width="100%" name="comment" required="required"></textarea>
						<br>
						<input type="hidden" name="reid" value="<?php echo $movie['id'] ?>">
						<input type="submit" class="submit-but" value="Leave a Comment">
						<br>
						<br>
					</form>	
					<br>				
				</div>
				
				<div class="previous-comments">
					<h3>
						Previous Comments
					</h3>
					<div class="comment-show">
						<?php 
                         foreach ($comment as $key) {
                         	
                         
						?>
						<h5><a href="#"><?php echo $key['name'];?></a> Said</h5>
						<p class="com-div"><a href="#"><?php echo $key['comment'];?></p>
						<?php } ?>
					</div>				
				</div>
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