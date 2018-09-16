<?php 

//Set of locations to pull api files for local storage AND poopulate variables !
$weather_location = array (
	
	array (
			"state" => "FL",
			"city" => "Fort_Lauderdale"
		),
	
	array (
			"state" => "FL",
			"city" => "Dania"
		),
	
	array (
			"state" => "FL",
			"city" => "Miami"
		),
	
	array (
			"state" => "FL",
			"city" => "Boca_Raton"
		),
	
	array (
			"state" => "FL",
			"city" => "Hollywood"
		),


);

//weatherunderground api key
$key = '3cadf16f83557fde'; //Weatherunderground

#########################################################################################################################################################

//GET THE weather data from API and store locally
function weatherForecastApiFetch($weather_location, $key){
	

		foreach ($weather_location as $location){

			$city = $location['city'];
			$state = $location['state'];

			file_put_contents("/home/jdberkowitz08/public_html/TVCOM2/CodeIgniter/assets/content/json/$state-$city-weather-forecast.json", fopen("http://api.wunderground.com/api/$key/forecast/q/$state/$city.json", 'r'));

		}


};


//GET THE weather data from API and store locally
function weatherCurrentApiFetch($weather_location, $key){

			foreach ($weather_location as $location){

				$city = $location['city'];
				$state = $location['state'];

				file_put_contents("/home/jdberkowitz08/public_html/TVCOM2/CodeIgniter/assets/content/json/$state-$city-weather.json", fopen("http://api.wunderground.com/api/$key/conditions/q/$state/$city.json", 'r'));
			}

};


weatherForecastApiFetch($weather_location, $key);

weatherCurrentApiFetch($weather_location, $key);




?>