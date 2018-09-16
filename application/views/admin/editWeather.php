<style type="text/css">input {margin: 5px 0; border-radius: 4px;line-height: 25px;}</style>




<div class="container">

	<div class="row">
		
				<div class="col-lg-1">Weather Location 1</div>
				<div class="col-lg-1">Weather Location 2</div>
				<div class="col-lg-1">Weather Location 3</div>
				<div class="col-lg-1">Weather Location 4</div>
				<div class="col-lg-1">Weather Location 5</div>
		
		<div class="col-lg-7"></div>
		
		
		
	</div>
	
	
	<div class="row">
	


<?php echo validation_errors(); ?>

<?php echo form_open('admin/postWeatherLocUpdate'); ?>
		
				<div class="col-lg-1"><input type="text" size="10" name="loc1City" value="<?php echo $weatherArray[0]['weatherLoc1City']; ?>"/></div>
				<div class="col-lg-1"><input type="text" size="10" name="loc2City" value="<?php echo $weatherArray[0]['weatherLoc2City']; ?>"/></div>
				<div class="col-lg-1"><input type="text" size="10" name="loc3City" value="<?php echo $weatherArray[0]['weatherLoc3City']; ?>"/></div>
				<div class="col-lg-1"><input type="text" size="10" name="loc4City" value="<?php echo $weatherArray[0]['weatherLoc4City']; ?>"/></div>
				<div class="col-lg-1"><input type="text" size="10" name="loc5City" value="<?php echo $weatherArray[0]['weatherLoc5City']; ?>"/></div>
				<input type="hidden" name="siteID" value="<?php echo $weatherArray[0]['siteID']; ?>" >	
	
		
		
		<div class="col-lg-7"></div>
		

		
	</div>	

	
	<div class="row">
	

		
				<div class="col-lg-1"><input type="text" size="10" name="loc1State" value="<?php echo $weatherArray[0]['weatherLoc1State']; ?>"/></div>
				<div class="col-lg-1"><input type="text" size="10" name="loc2State" value="<?php echo $weatherArray[0]['weatherLoc2State']; ?>"/></div>
				<div class="col-lg-1"><input type="text" size="10" name="loc3State" value="<?php echo $weatherArray[0]['weatherLoc3State']; ?>"/></div>
				<div class="col-lg-1"><input type="text" size="10" name="loc4State" value="<?php echo $weatherArray[0]['weatherLoc4State']; ?>"/></div>
				<div class="col-lg-1"><input type="text" size="10" name="loc5State" value="<?php echo $weatherArray[0]['weatherLoc5State']; ?>"/></div>
				<input type="hidden" name="siteID" value="<?php echo $weatherArray[0]['siteID']; ?>" >	
	
		
		
		<div class="col-lg-7"><input type="submit" name="submit" value="Update Site Weather"></div>
		

		
	</div>	
	
		<?php echo form_close(); ?>
	
	
</div>