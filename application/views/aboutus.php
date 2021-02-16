<div class="mid-down">
			<div class="response-box1">
				<div class="text-holder">
				  	<h3>About MovieBuzz</h3>
				  	<br>
				  	<p>
					<b>MovieBuzz</b> is best website/platform for bollywood and hollywood full movies. Here we share various filesharing sites links for one movie in many quality like bluray, hdrip, brrip, web-dl etc.
					<br>
					If your think we shared your content or product without your permission, then you can claim using our Contact Form page. We never host any file on our server All point to content hosted on third party websites.
					<br>
					Note: We have no connection from 9M Media Pvt Ltd. 9xmovies is complete independent entity.
					</p>
					<br>
					<h3>The Team</h3>
					<br>
					<p>
					Alex Morgan <br>
					Director and Co-Founder<br>
					Mark Rylance<br>
					Associate Editor
					</p>
					<br>
					<h3>Address</h3>
					<br>
					<p>
					36, rue de Raymond Poincare<br> 
					Nantes, France <br>
					Zip: 44300<br>
					</p>
				</div>
				<br><br><br>
				<div class="previous-comments">
					<h3>
						Previous Comments
					</h3>
					<div class="comment-show">
						<?php 
                         foreach ($comment as $key) {
                         	
                         
						?>
						<h5><a href="#"><?php echo $key['name'];?></a> Said</h5>
						<p class="com-div"><?php echo $key['comment'];?></p>
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