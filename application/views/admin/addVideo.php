

<?php echo validation_errors(); ?>

<?php echo form_open('admin/addVideo'); ?>

<style>.pad-10{margin:10px 0;}</style>
<div class="container">
	
	<div class="row">
		<div class="col-lg-12"><?php echo $success; ?></div>
		<div class="col-lg-12"><h2><?php echo $title; ?></h2></div>
		<div class="col-lg-2">
			
			<div class="col-lg-12 pad-10"><input type="text" name="adName" placeholder="Ad Name" /></div>
			<div class="col-lg-12 pad-10"><input type="text" name="adType" placeholder="Ad Type" /></div>
			<div class="col-lg-12 pad-10"><input type="text" name="adPath" placeholder="Ad Path" /></div>
			<div class="col-lg-12 pad-10"><label for="adStartDate" style="margin-right: 10px;">Start Date</label><input type="date" name="adStartDate" placeholder="Ad Start Date" /></div>
			<div class="col-lg-12 pad-10"><label for="adEndDate" style="margin-right: 10px;">End Date</label><input type="date" name="adEndDate" placeholder="Ad End Date" /></div>
			<div class="col-lg-12 pad-10"><label for="adActive" style="margin-right: 10px;">Ad Active</label><input type="checkbox" name="adActive" placeholder="" /></div>
			<div class="col-lg-12 pad-10"><input type="submit" name="submit" value="Add New Ad"></div>		

			
		</div>
		
		<div class="col-lg-10"><div id="adsListAdd"></div></div>
		
	</div>
	
</div>

	