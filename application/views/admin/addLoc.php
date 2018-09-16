

<?php echo validation_errors(); ?>

<?php echo form_open('admin/addLocation'); ?>

<style>.pad-10{margin:10px 0;}</style>
<div class="container">
	
	<div class="row">
		<div class="col-lg-12"><?php echo $success; ?></div>
		<div class="col-lg-12"><h2><?php echo $title; ?></h2></div>
		<div class="col-lg-2">
			
			<div class="col-lg-12 pad-10"><input type="text" name="companyName" placeholder="Company Name" /></div>
			<div class="col-lg-12 pad-10"><input type="text" name="companyContact" placeholder="Contact Name" /></div>
			<div class="col-lg-12 pad-10"><input type="text" name="companyEmail" placeholder="Email Address" /></div>
			<div class="col-lg-12 pad-10"><input type="text" name="companyAddress" placeholder="Street Address" /></div>
			<div class="col-lg-12 pad-10"><input type="text" name="companyCity" placeholder="City" /></div>
			<div class="col-lg-12 pad-10"><input type="text" name="companyState" placeholder="State" /></div>
			<div class="col-lg-12 pad-10"><input type="text" name="companyZip" placeholder="Zip" /></div>
			<div class="col-lg-12 pad-10"><label for="contractStartDate" style="margin-right: 10px;">Start Date</label><input type="date" name="contractDateStart" placeholder="Contract Start" /></div>
			<div class="col-lg-12 pad-10"><label for="contractEndDate" style="margin-right: 10px;">End Date</label><input type="date" name="contractDateEnd" placeholder="Contract End" /></div>
			<div class="col-lg-12 pad-10"><label for="accountActive" style="margin-right: 10px;">Account Active</label><input type="checkbox" name="accountActive" placeholder="Active" /></div>
			<div class="col-lg-12 pad-10"><input type="submit" name="submit" value="Create Account"></div>			
			
		</div>
		
		<div class="col-lg-10"><div id="allAccounts"></div></div>
		
	</div>
	
</div>