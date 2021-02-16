<div class="mid-down">
			<div class="response-box1">
				<div class="text-holder">
				    <h3>Digital Millenium Copyright Act Policy (DMCA) </h3>
			        <br>
			        <p>
			          It is our policy to respond to clear notices of alleged copyright infringement. If you believe that your intellectual property rights have been infringed upon by one of our users, we need you to send us a proper notification. All notices should comply with the notification requirements of the DMCA. You MUST provide the following information:
			        </p>
			        <br>
			        <p>
			         1. Identify yourself as either:
						– The owner of a copyrighted work(s), or
						– A person “authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.”
			        </p>
			        <br>
			        <p>
			          2. Identify the copyrighted work claimed to have been infringed.
			        </p>
			        <br>
			        <p>
			          3. Identify the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed or access to which is to be disabled by providing us the exact location of the infringing file with the exact interupload.com link
			        </p>
			        <br>
			        <p>
			          4. Provide us the web address under which the link has been published.
			        </p>
			        <br>
			        <p>
				        5. Provide your contact information which includes, your full name, address and telephone number.
				        <br>
				        (For more details on the information required for valid notification, see 17 U.S.C. 512(c)(3).)
				        <br>
						You should be aware that, under the DMCA, claimants who make misrepresentations concerning copyright infringement may be liable for damages incurred as a result of the removal or blocking of the material, court costs, and attorneys fees.
						<br>
						A proper notification MUST contain the information above, or it may be IGNORED.
						<br>
						Send notifications to: Contact US Page
						<br>
						Please allow 2-3 business days for an email response. Note that emailing your complaint to other parties such as our Internet Service Provider will not expedite your request and may result in a delayed response due the complaint not properly being filed.
			        </p>
			        <br>
			        <br>
			         <h3>Disclaimer</h3>
			        <br>
			        <p>
			          <b>MovieBuzz</b> does not host any files on it’s servers. All point to content hosted on third party websites. <b>MovieBuzz</b> does not accept responsibility for content hosted on third party websites and does not have any involvement in the same.
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