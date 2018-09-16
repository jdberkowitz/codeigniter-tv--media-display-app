


<div class="container">

	<div class="row account-info">
		
		<div class="col-lg-6">
		
			<div class="col-lg-1"><strong>SiteID:</strong> </div><div class="col-lg-10"><?php echo $accounts[0]['siteID'] ?></div>
			<div style="clear: both;"></div>
			<div class="col-lg-12"><strong>Company Name:</strong> <?php echo $accounts[0]['companyName'] ?></div>
			<div class="col-lg-1"><strong>Address:</strong> </div><div class="col-lg-10">&nbsp;<?php echo $accounts[0]['companyAddress'] ?></div>
			<div style="clear: both;"></div>	

			<?php echo validation_errors(); ?>

			<?php echo form_open('admin/updateAccountInfo'); ?>			
			
			<div class="col-lg-12">&nbsp;<?php echo $accounts[0]['companyCity'] ?>, &nbsp;<?php echo $accounts[0]['companyState'] ?>&nbsp;<?php echo $accounts[0]['companyZip'] ?></div>

			<div class="col-lg-12">
				<table style="margin:50px 0 ;" border="0" width="100%" border="1">
				  <tbody>
					<tr>
					  <td><strong>Contract Start:</strong></td>
					  <td><?php echo $accounts[0]['contractDateStart'] ?></td>
					  <td><strong>Created:</strong></td>
					  <td><?php echo $accounts[0]['accountCreated'] ?></td>
					</tr>
					<tr>
					  <td><strong>Contract End:</strong></td>
					  <td><?php echo $accounts[0]['contractDateEnd'] ?></td>
					  <td><strong>Last Modified:</strong></td>
					  <td><?php echo $accounts[0]['accountModified'] ?></td>
					</tr>
					<tr>
					  <td><strong>Account Active</strong></td>
					  <td><input type="number" name="accountActive" value="<?php echo $accounts[0]['accountActive']; ?>" size="50" /></td>
					  <td><strong>Broswer Refresh (sec)</strong></td>
					  <td><input type="number" name="browserRefresh" value="<?php echo $accounts[0]['browserRefresh']; ?>" size="50" /></td>
					</tr>
					  <tr>
						  <td><input type="submit" name="submit" value="Update Account Info"></td>
					  </tr>
					  <input type="hidden" name="siteID" value="<?php echo $accounts[0]['siteID']; ?>" >	
					  
					  	
						<?php echo form_close(); ?>
				  </tbody>
				</table>
				</div>
		
		
		
		</div>
		
		
		
		
		<div class="col-lg-6"></div>
		
		
		
	</div>
	
</div>