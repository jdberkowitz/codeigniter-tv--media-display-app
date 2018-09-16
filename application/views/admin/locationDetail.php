
<?php echo validation_errors(); ?>

<?php echo form_open('admin/location'); ?>

<div style="width: 100%;height: 50px;"></div>
<div class="container">
		

	<div class="row">
	
		<div class="col-sm-2">Location Detail (siteID)</div>
		<div class="col-sm-2"><input type="number" size="50" name="locationID" /></div>
		<div class="col-sm-2"> <input type="submit" name="submit" value="Search" /> </div>
	</div>
	
	
		<div class="row">
			
			<div class="col-sm-12">
			
				<h2>All Accounts</h2>	
				
				<div id="allAccounts"></div>
			</div>	
			
			<div class="col-sm-12">
			
				<h2>Ads List by Location</h2>	
				
				<div id="adsList"></div>
			</div>	
			
			<div class="col-sm-12">
			
				<h2>All Available Ads</h2>	
				
				<div id="allAds"></div>
			</div>	
			
		</div>
	</div>