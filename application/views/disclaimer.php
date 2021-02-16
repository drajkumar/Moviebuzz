<div class="mid-down">
			<div class="response-box1">
				<div class="text-holder">
				    <p>
				    	None of the files listed in this website are hosted on our server. All the files are hosted on external file hosts. 9xmovies does not accept responsibility for content hosted on third party websites and does not have any involvement in the same.
				    </p>
				    <br>
					<h2 style="padding-left: 10px;">Copyrighted Contents???</h2>
					<br>
					<p>
						What to do if I want you to remove certain copyrighted Contents from our website?
						Please note that we do not host any copyrighted content on this website. The Content (text) contains only information shared by on internet that do not contain data that might be copyrighted in any way. However, we offer a service to remove Contents from our website if the copyright holder of the content requests so. These removal requests are only valid if:
					</p>
					<br>
					<p>
						You are, or your company is, the copyright holder of the content in question.
						You provide the exact URLs to the Content.
						You provide the complete name(s) of the content in question.
						You send the removal request using a verifiable email address (e.g. address@yourname/yourcompany.com).
					</p>
					<br>
					<p>
						If your request complies with all of these rules, send a message using Contact US . Please keep the correspondence polite.
						We remove postings as soon as we can, usually within 4 days. Keep in mind that we can only handle removal requests that comply with the above rules.
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