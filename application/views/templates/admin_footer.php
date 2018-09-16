	
	
	
	

	
	
<script type="text/javascript">
		
	<?php 
	
	echo 'var accounts ='.json_encode($accounts);
	
	
	?>
 
    $("#allAccounts").jsGrid({
        width: "100%",
        height: "350px",

		filtering: true,
        editing: false,
        sorting: true,
        paging: true,
        autoload: true,
 
        //data: accounts,
		controller : {
 		loadData:  function(filter) {
                return $.grep(accounts, function(item) {
					
					// client-side filtering below (be sure conditions are correct)
				    return (!filter.siteID || item.siteID.indexOf(filter.siteID) > -1)
						&& (!filter.accountActive || item.accountActive.indexOf(filter.accountActive) > -1);
					;

				}
			
			)}},
	 
        fields: [
            { name: "siteID", type: "number", width: 50, sorting: true,filtering: true, },
			{ name: "companyName", type: "text", width: 100,sorting: true,filtering: false, },
            { name: "companyContact", type: "text", width: 75,sorting: true,filtering: false, },
            { name: "companyAddress", type: "text", width: 150,sorting: true,filtering: false, },
            { name: "companyState", type: "text", width: 50,sorting: true,filtering: false, },
			{ name: "companyCity", type: "text", width: 75,sorting: true,filtering: false,  },
			{ name: "contractDateStart", type: "date", width: 75,sorting: true,filtering: false, },
			{ name: "contractDateEnd", type: "date", width: 75,sorting: true,filtering: false, },
			{ name: "accountCreated", type: "date", width: 75,sorting: true,filtering: false, },
			{ name: "accountActive", type: "text", width: 75,sorting: true,filtering: true, },
            { type: "control" }
        ]
    });
</script>	

	
<script type="text/javascript">
		
	<?php 
	
	echo 'var ads ='.json_encode($allAds);
	
	
	?>
 
    $("#adsList").jsGrid({
        width: "100%",
        height: "500px",

        filtering: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
 
       //data: ads,
		controller : {
 		loadData:  function(filter) {
                return $.grep(ads, function(item) {
					
	            	// client-side filtering below (be sure conditions are correct)
			   		return (!filter.siteID || item.siteID.indexOf(filter.siteID) > -1)
						&& (!filter.adActive || item.adActive.indexOf(filter.adActive) > -1)
						&& (!filter.adPath || item.adPath.indexOf(filter.adPath) > -1);
	               
				}
			
			)}},		
 
        fields: [
            { name: "siteID", type: "number", width: 50, sorting: true,filtering:true, },
			{ name: "companyName", type: "text", width: 100,sorting: true,filtering: false, },
			{ name: "adID", type: "text", width: 50, sorting: true,filtering: false,},
			{ name: "adSort", type: "number", width: 50, sorting: true,filtering: false,},			
            { name: "adName", type: "text", width: 150,sorting: true,filtering: false, },
            { name: "adPath", type: "text", width: 150,sorting: true,filtering: true, },
            { name: "adStartDate", type: "text", width: 50,sorting: true,filtering: false, },
			{ name: "adEndDate", type: "text", width: 75,sorting: true,filtering: false,  },
			{ name: "adCreated", type: "date", width: 75,sorting: true,filtering: false, },
			{ name: "adActive", type: "text", width: 50,sorting: true,filtering: true,},
            { type: "control" }
        ]
    });
</script>	

	
<script type="text/javascript">
		
	<?php 
	
	echo 'var ads ='.json_encode($allAds);
	
	
	?>
 
    $("#adsListAdd").jsGrid({
        width: "100%",
        height: "800px",

        filtering: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
 
       //data: ads,
		controller : {
 		loadData:  function(filter) {
                return $.grep(ads, function(item) {
					
	            	// client-side filtering below (be sure conditions are correct)
			   		return (!filter.adID || item.adID.indexOf(filter.adID) > -1)
						&& (!filter.adActive || item.adActive.indexOf(filter.adActive) > -1)
						&& (!filter.adPath || item.adPath.indexOf(filter.adPath) > -1);
	               
				}
			
			)}},		
 
        fields: [
			
			{ name: "adID", type: "text", width: 50, sorting: true,filtering: true,},
            { name: "adName", type: "text", width: 75,sorting: true,filtering: false, },
            { name: "adPath", type: "text", width: 150,sorting: true,filtering: true, },
            { name: "adStartDate", type: "text", width: 50,sorting: true,filtering: false, },
			{ name: "adEndDate", type: "text", width: 75,sorting: true,filtering: false,  },
			{ name: "adActive", type: "text", width: 50,sorting: true,filtering: true,},
            { type: "control" }
        ]
    });
</script>	

<script type="text/javascript">
		
	<?php 
	
	echo 'var allAds ='.json_encode($adsList);
	
	
	?>
 
    $("#allAds").jsGrid({
        width: "100%",
        height: "500px",

        filtering: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
 
       //data: ads,
		controller : {
 		loadData:  function(filter) {
                return $.grep(allAds, function(item) {
					
	            	// client-side filtering below (be sure conditions are correct)
			   		return (!filter.adID || item.adID.indexOf(filter.adID) > -1)
						&& (!filter.adActive || item.adActive.indexOf(filter.adActive) > -1)
						&& (!filter.adPath || item.adPath.indexOf(filter.adPath) > -1);
	               
				}
			
			)}},		
 
        fields: [
			{ name: "adID", type: "text", width: 50, sorting: true,filtering: true,},
            { name: "adName", type: "text", width: 150,sorting: true,filtering: false, },
            { name: "adPath", type: "text", width: 150,sorting: true,filtering: true, },
            { name: "adStartDate", type: "text", width: 50,sorting: true,filtering: false, },
			{ name: "adEndDate", type: "text", width: 75,sorting: true,filtering: false,  },
			{ name: "adCreated", type: "date", width: 75,sorting: true,filtering: false, },
			{ name: "adActive", type: "text", width: 50,sorting: true,filtering: true,},
            { type: "control" }
        ]
    });
</script>	

</body>
</html>