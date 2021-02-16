<div class="mid">
			<h2>
				Latest Movies	
			</h2>
			<br>
          <?php  
           foreach ($movies as $movie):
           	
           

           ?>

			<div class="items">
			<a href="<?php echo site_url('download/'.$movie['id']); ?>">
				<img class="poster" src="<?php echo base_url()?>uploads/<?php echo $movie['picture'] ?>" width="100%" height="100%">
				<div class="item-des">
					<button>Download</button>
					<p>
						<b><?php echo $movie['title'] ?></b>
						<br>
						Click to download
					</p>
				</div>
				</a>
			</div>
			<?php endforeach;  ?>
		</div>