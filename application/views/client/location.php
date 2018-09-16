<?php

$weather_location = array (
	
	array (
			"state" =>  $weather[0]['weatherLoc1State'],
			"city" => $weather[0]['weatherLoc1City']
		),
	
	array (
			"state" => $weather[0]['weatherLoc2State'],
			"city" => $weather[0]['weatherLoc2City']
		),
	
	array (
			"state" => $weather[0]['weatherLoc3State'],
			"city" => $weather[0]['weatherLoc3City']
		),
	
	array (
			"state" => $weather[0]['weatherLoc4State'],
			"city" => $weather[0]['weatherLoc4City']
		),
	
	array (
			"state" => $weather[0]['weatherLoc5State'],
			"city" => $weather[0]['weatherLoc5City']
		)


);


//### WEATHER ###/
//weatherunderground api key
$key = '3cadf16f83557fde'; //Weatherunderground

//Weather by City via Weather Underground API

$city1 = $weather_location[0]['city'];
$state1 = $weather_location[0]['state'];
$current_url = base_url().'assets/content/json/'.$state1.'-'.$city1.'-weather.json'; // Path to JSON file local cached 
$forecast_url = base_url().'assets/content/json/'.$state1.'-'.$city1.'-weather-forecast.json';

$city2 = $weather_location[1]['city']; 
$state2 = $weather_location[1]['state'];
$city2_current_url = base_url().'assets/content/json/'.$state2.'-'.$city2.'-weather.json';
$city2_forecast_url = base_url().'assets/content/json/'.$state2.'-'.$city2.'-weather-forecast.json'; 

$city3 = $weather_location[2]['city']; 
$state3 = $weather_location[2]['state'];
$city3_current_url = base_url().'assets/content/json/'.$state3.'-'.$city3.'-weather.json'; 
$city3_forecast_url = base_url().'assets/content/json/'.$state3.'-'.$city3.'-weather-forecast.json'; 

$city4 = $weather_location[3]['city']; 
$state4 = $weather_location[3]['state'];
$city4_current_url = base_url().'assets/content/json/'.$state4.'-'.$city4.'-weather.json'; 
$city4_forecast_url = base_url().'assets/content/json/'.$state4.'-'.$city4.'-weather-forecast.json';

$city5 = $weather_location[4]['city']; 
$state5 = $weather_location[4]['state'];
$city5_current_url = base_url().'assets/content/json/'.$state5.'-'.$city5.'-weather.json'; 
$city5_forecast_url = base_url().'assets/content/json/'.$state5.'-'.$city5.'-weather-forecast.json'; 


//Current Weather Query and Variables

//$current_url = './json/'.$state1.'-'.$city1.'-weather.json'; // Path to JSON file local cached 
//PATH IN CONFIG FILE
$current_data = file_get_contents($current_url); // Put the contents of the file into a variable
$weather_data = json_decode($current_data, true); // decode the JSON feed



$current_temp = $weather_data["current_observation"]["temperature_string"]; //52.6 F (11.4 C)

$current_location = $weather_data["current_observation"]["display_location"]["full"]; //Miami, FL

$current_weather = $weather_data["current_observation"]["weather"];  //overcast

$current_wind_mph = $weather_data["current_observation"]["wind_mph"]; // 0.0


//3 Day Forecast Query and Variables

//$forecast_url = './json/'.$state1.'-'.$city1.'-weather-forecast.json'; // Path to JSON file local - Needs to change to a remote since it will be the same on all displays
$forecast_weather_data = file_get_contents($forecast_url); // Put the contents of the file into a variable
$forecast_data = json_decode($forecast_weather_data, true); // decode the JSON feed

$day1 = $forecast_data["forecast"]["txt_forecast"]["forecastday"][0];
$day2 = $forecast_data["forecast"]["txt_forecast"]["forecastday"][1];
$day3 = $forecast_data["forecast"]["txt_forecast"]["forecastday"][2];


$day1_title = $day1["title"];
$day2_title = $day2["title"];
$day3_title = $day3["title"];

$day1_iconURL = $day1["icon_url"];
$day2_iconURL = $day2["icon_url"];
$day3_iconURL = $day3["icon_url"];

$day1_icon = $day1["icon"];
$day2_icon = $day2["icon"];
$day3_icon = $day3["icon"];

$day1_text = $day1["fcttext"];
$day2_text = $day2["fcttext"];
$day3_text = $day3["fcttext"];



##################################################################

//City 2
//$city2_current_url = './json/'.$state2.'-'.$city2.'-weather.json'; // Path to JSON file local
$city2_current_data = file_get_contents($city2_current_url); // Put the contents of the file into a variable
$city2_weather_data = json_decode($city2_current_data, true); // decode the JSON feed



$city2_current_temp = $city2_weather_data["current_observation"]["temperature_string"]; //52.6 F (11.4 C)

$city2_current_location = $city2_weather_data["current_observation"]["display_location"]["full"]; //Miami, FL

$city2_current_weather = $city2_weather_data["current_observation"]["weather"];  //overcast

$city2_current_wind_mph = $city2_weather_data["current_observation"]["wind_mph"]; // 0.0


//3 Day Forecast QWuery and Variables
//$city2_forecast_url = './json/'.$state2.'-'.$city2.'-weather-forecast.json'; // Path to JSON file local
$city2_forecast_weather_data = file_get_contents($city2_forecast_url); // Put the contents of the file into a variable
$city2_forecast_data = json_decode($city2_forecast_weather_data, true); // decode the JSON feed

$city2_day1 = $city2_forecast_data["forecast"]["txt_forecast"]["forecastday"][0];
$city2_day2 = $city2_forecast_data["forecast"]["txt_forecast"]["forecastday"][1];
$city2_day3 = $city2_forecast_data["forecast"]["txt_forecast"]["forecastday"][2];


$city2_day1_title = $city2_day1["title"];
$city2_day2_title = $city2_day2["title"];
$city2_day3_title = $city2_day3["title"];

$city2_day1_iconURL = $city2_day1["icon_url"];
$city2_day2_iconURL = $city2_day2["icon_url"];
$city2_day3_iconURL = $city2_day3["icon_url"];

$city2_day1_icon = $city2_day1["icon"];
$city2_day2_icon = $city2_day2["icon"];
$city2_day3_icon = $city2_day3["icon"];

$city2_day1_text = $city2_day1["fcttext"];
$city2_day2_text = $city2_day2["fcttext"];
$city2_day3_text = $city2_day3["fcttext"];


####################################################################################


//City 3
//$city3_current_url = './json/'.$state3.'-'.$city3.'-weather.json'; // Path to JSON file local
$city3_current_data = file_get_contents($city3_current_url); // Put the contents of the file into a variable
$city3_weather_data = json_decode($city3_current_data, true); // decode the JSON feed



$city3_current_temp = $city3_weather_data["current_observation"]["temperature_string"]; //52.6 F (11.4 C)

$city3_current_location = $city3_weather_data["current_observation"]["display_location"]["full"]; //Miami, FL

$city3_current_weather = $city3_weather_data["current_observation"]["weather"];  //overcast

$city3_current_wind_mph = $city3_weather_data["current_observation"]["wind_mph"]; // 0.0


//3 Day Forecast QWuery and Variables
//$city3_current_url = './json/'.$state3.'-'.$city3.'-weather.json'; // Path to JSON file local
$city3_forecast_weather_data = file_get_contents($city3_forecast_url); // Put the contents of the file into a variable
$city3_forecast_data = json_decode($city3_forecast_weather_data, true); // decode the JSON feed

$city3_day1 = $city3_forecast_data["forecast"]["txt_forecast"]["forecastday"][0];
$city3_day2 = $city3_forecast_data["forecast"]["txt_forecast"]["forecastday"][1];
$city3_day3 = $city3_forecast_data["forecast"]["txt_forecast"]["forecastday"][2];


$city3_day1_title = $city3_day1["title"];
$city3_day2_title = $city3_day2["title"];
$city3_day3_title = $city3_day3["title"];

$city3_day1_iconURL = $city3_day1["icon_url"];
$city3_day2_iconURL = $city3_day2["icon_url"];
$city3_day3_iconURL = $city3_day3["icon_url"];

$city3_day1_icon = $city3_day1["icon"];
$city3_day2_icon = $city3_day2["icon"];
$city3_day3_icon = $city3_day3["icon"];

$city3_day1_text = $city3_day1["fcttext"];
$city3_day2_text = $city3_day2["fcttext"];
$city3_day3_text = $city3_day3["fcttext"];


############################################################################################

//City 4
//$city4_current_url = './json/'.$state4.'-'.$city4.'-weather.json'; // Path to JSON file local
$city4_current_data = file_get_contents($city4_current_url); // Put the contents of the file into a variable
$city4_weather_data = json_decode($city4_current_data, true); // decode the JSON feed



$city4_current_temp = $city4_weather_data["current_observation"]["temperature_string"]; //52.6 F (11.4 C)

$city4_current_location = $city4_weather_data["current_observation"]["display_location"]["full"]; //Miami, FL

$city4_current_weather = $city4_weather_data["current_observation"]["weather"];  //overcast

$city4_current_wind_mph = $city4_weather_data["current_observation"]["wind_mph"]; // 0.0


//3 Day Forecast QWuery and Variables
//$city4_forecast_url = './json/'.$state4.'-'.$city4.'-weather-forecast.json'; // Path to JSON file local
$city4_forecast_weather_data = file_get_contents($city4_forecast_url); // Put the contents of the file into a variable
$city4_forecast_data = json_decode($city4_forecast_weather_data, true); // decode the JSON feed

$city4_day1 = $city4_forecast_data["forecast"]["txt_forecast"]["forecastday"][0];
$city4_day2 = $city4_forecast_data["forecast"]["txt_forecast"]["forecastday"][1];
$city4_day3 = $city4_forecast_data["forecast"]["txt_forecast"]["forecastday"][2];


$city4_day1_title = $city4_day1["title"];
$city4_day2_title = $city4_day2["title"];
$city4_day3_title = $city4_day3["title"];

$city4_day1_iconURL = $city4_day1["icon_url"];
$city4_day2_iconURL = $city4_day2["icon_url"];
$city4_day3_iconURL = $city4_day3["icon_url"];

$city4_day1_icon = $city4_day1["icon"];
$city4_day2_icon = $city4_day2["icon"];
$city4_day3_icon = $city4_day3["icon"];

$city4_day1_text = $city4_day1["fcttext"];
$city4_day2_text = $city4_day2["fcttext"];
$city4_day3_text = $city4_day3["fcttext"];


#################################################################################################


//City 5
//$city5_current_url = './json/'.$state5.'-'.$city5.'-weather.json'; // Path to JSON file local
$city5_current_data = file_get_contents($city5_current_url); // Put the contents of the file into a variable
$city5_weather_data = json_decode($city5_current_data, true); // decode the JSON feed



$city5_current_temp = $city5_weather_data["current_observation"]["temperature_string"]; //52.6 F (11.4 C)

$city5_current_location = $city5_weather_data["current_observation"]["display_location"]["full"]; //Miami, FL

$city5_current_weather = $city5_weather_data["current_observation"]["weather"];  //overcast

$city5_current_wind_mph = $city5_weather_data["current_observation"]["wind_mph"]; // 0.0


//3 Day Forecast QWuery and Variables
//$city5_forecast_url = './json/'.$state5.'-'.$city5.'-weather-forecast.json'; // Path to JSON file local
$city5_forecast_weather_data = file_get_contents($city5_forecast_url); // Put the contents of the file into a variable
$city5_forecast_data = json_decode($city5_forecast_weather_data, true); // decode the JSON feed

$city5_day1 = $city5_forecast_data["forecast"]["txt_forecast"]["forecastday"][0];
$city5_day2 = $city5_forecast_data["forecast"]["txt_forecast"]["forecastday"][1];
$city5_day3 = $city5_forecast_data["forecast"]["txt_forecast"]["forecastday"][2];


$city5_day1_title = $city5_day1["title"];
$city5_day2_title = $city5_day2["title"];
$city5_day3_title = $city5_day3["title"];

$city5_day1_iconURL = $city5_day1["icon_url"];
$city5_day2_iconURL = $city5_day2["icon_url"];
$city5_day3_iconURL = $city5_day3["icon_url"];

$city5_day1_icon = $city5_day1["icon"];
$city5_day2_icon = $city5_day2["icon"];
$city5_day3_icon = $city5_day3["icon"];

$city5_day1_text = $city5_day1["fcttext"];
$city5_day2_text = $city5_day2["fcttext"];
$city5_day3_text = $city5_day3["fcttext"];


//Path to json file for news
$news_us_url = base_url().'assets/content/json/us-news.json'; // Path to API JSON file by location


//Current US News Headlines Query and Variables
//$news_us_url = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=25b8665cf9ac4d879fdeba0749f2d5b8'; // Path to API JSON file by location
$news_us_data = file_get_contents($news_us_url); // Put the contents of the file into a variable
$us_news_data = json_decode($news_us_data, true); // decode the JSON feed



$news1_source =	$us_news_data['articles'][0]['source']['name'];
$news1_title = $us_news_data['articles'][0]['title'];
$news1_description	= $us_news_data['articles'][0]['description'];


$news2_source =	$us_news_data['articles'][1]['source']['name'];
$news2_title = $us_news_data['articles'][1]['title'];
$news2_description	= $us_news_data['articles'][1]['description'];


$news3_source =	$us_news_data['articles'][2]['source']['name'];
$news3_title = $us_news_data['articles'][2]['title'];
$news3_description	= $us_news_data['articles'][2]['description'];


$news4_source =	$us_news_data['articles'][3]['source']['name'];
$news4_title = $us_news_data['articles'][3]['title'];
$news4_description	= $us_news_data['articles'][3]['description'];


$news5_source =	$us_news_data['articles'][4]['source']['name'];
$news5_title = $us_news_data['articles'][4]['title'];
$news5_description	= $us_news_data['articles'][4]['description'];


$news6_source =	$us_news_data['articles'][5]['source']['name'];
$news6_title = $us_news_data['articles'][5]['title'];
$news6_description	= $us_news_data['articles'][5]['description'];

?>


<div class="container-fluid">
  <div class="row content">
    <div class="col-lg-10 video-wrapper">

    <div id="sliderFrame">
        <div id="slider">

			
	<?php 		
	

			
		
			foreach ($ad_videos as $videos){
				
				foreach ($videos as $row){

				echo '<video preload="true" data-autovideo="true" data-image="';
					
					echo base_url();
					
					echo 'assets/content/images/video-back-logo.jpg" class="video-item"  >';
				
					echo '<source data-src="';
					
					echo base_url();
					
					echo 'assets/content/videos/';
					
					echo $row;
				
					echo '" type="video/mp4" /></video>';
					
				}

			};	
	?>
			
			
			
        </div>
    </div>			
		
    </div>

    <div class="sidenav col-lg-2">
    </div>
  </div>
</div>

<footer class="container-fluid">
	
	<div class="row">
		<!--- Box 1 -->
		<div class="col-sm-1 mod-width">
			<img src="<?php echo base_url(); ?>assets/content/images/tcvom_icon_web.png" width="100" height="100" alt="tcvom-media"	style="width: 50px;height: 50px;margin: 10px 0;"/>
			<h4><small style="color: #292929;">Powered by TVCOM <strong>Media.</strong></small></h4>		
		</div>
		
		
<div id="Glide" class="glide">
    <div class="glide__wrapper">
			<ul class="glide__track">
				
			<li class="glide__slide">	
						<!-- SLIDE 1 Weather-->
						<!--- Box 2 -->			
						<div class="col-sm-2 box-border">
							<h4><small style="color: #292929;">Currently in.</small></h4>
							<h2><?php echo $current_location; ?></h2>
							<div class="current-temp"><?php echo $current_temp; ?></div>
							<div class="current-conditions"><?php echo $current_weather; ?>&nbsp;<strong>Winds:</strong> <?php echo $current_wind_mph; ?>MPH</div>

						</div>			
						<!--- Box 3 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $day1_iconURL; ?>" alt=""/></div>
								<h2><?php echo $day1_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $day1_text; ?></div>
							</div>
						</div>
						<!--- Box 4 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $day2_iconURL; ?>" alt=""/></div>
								<h2><?php echo $day2_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $day2_text; ?></div>
							</div>
						</div>		

						<!--- Box 5 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $day3_iconURL; ?>" alt=""/></div>
								<h2><?php echo $day3_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $day3_text; ?></div>
							</div>
						</div>	
				</li>


				<li class="glide__slide">	
						<!-- SLIDE 2 Weather-->
						<!--- Box 2 -->			
						<div class="col-sm-2 box-border">
							<h4><small style="color: #292929;">Currently in.</small></h4>
							<h2><?php echo $city2_current_location; ?></h2>
							<div class="current-temp"><?php echo $city2_current_temp; ?></div>
							<div class="current-conditions"><?php echo $city2_current_weather; ?>&nbsp;<strong>Winds:</strong> <?php echo $city2_current_wind_mph; ?>MPH</div>

						</div>					
						<!--- Box 3 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city2_day1_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city2_day1_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city2_day1_text; ?></div>
							</div>
						</div>
						<!--- Box 4 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city2_day2_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city2_day2_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city2_day2_text; ?></div>
							</div>
						</div>		

						<!--- Box 5 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city2_day3_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city2_day3_title; ?></h2>								
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city2_day3_text; ?></div>
							</div>
						</div>	
				</li>

				<li class="glide__slide">	
						<!-- SLIDE 3 Weather-->
						<!--- Box 2 -->			
						<div class="col-sm-2 box-border">
							<h4><small style="color: #292929;">Currently in.</small></h4>
							<h2><?php echo $city3_current_location; ?></h2>
							<div class="current-temp"><?php echo $city3_current_temp; ?></div>
							<div class="current-conditions"><?php echo $city3_current_weather; ?>&nbsp;<strong>Winds:</strong> <?php echo $city3_current_wind_mph; ?>MPH</div>

						</div>					
						<!--- Box 3 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city3_day1_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city3_day1_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city3_day1_text; ?></div>
							</div>
						</div>
						<!--- Box 4 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city3_day2_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city3_day2_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city3_day2_text; ?></div>
							</div>
						</div>		

						<!--- Box 5 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city3_day3_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city3_day3_title; ?></h2>								
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city3_day3_text; ?></div>
							</div>
						</div>	
				</li>				
			

				<li class="glide__slide">	
						<!-- SLIDE 4 Weather-->
						<!--- Box 2 -->			
						<div class="col-sm-2 box-border">
							<h4><small style="color: #292929;">Currently in.</small></h4>
							<h2><?php echo $city4_current_location; ?></h2>
							<div class="current-temp"><?php echo $city4_current_temp; ?></div>
							<div class="current-conditions"><?php echo $city4_current_weather; ?>&nbsp;<strong>Winds:</strong> <?php echo $city4_current_wind_mph; ?>MPH</div>

						</div>					
						<!--- Box 3 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city4_day1_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city4_day1_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city4_day1_text; ?></div>
							</div>
						</div>
						<!--- Box 4 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city4_day2_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city4_day2_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city4_day2_text; ?></div>
							</div>
						</div>		

						<!--- Box 5 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city4_day3_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city4_day3_title; ?></h2>								
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city4_day3_text; ?></div>
							</div>
						</div>	
				</li>
				
				<li class="glide__slide">	
						<!-- SLIDE 5 Weather-->
						<!--- Box 2 -->			
						<div class="col-sm-2 box-border">
							<h4><small style="color: #292929;">Currently in.</small></h4>
							<h2><?php echo $city5_current_location; ?></h2>
							<div class="current-temp"><?php echo $city5_current_temp; ?></div>
							<div class="current-conditions"><?php echo $city5_current_weather; ?>&nbsp;<strong>Winds:</strong> <?php echo $city5_current_wind_mph; ?>MPH</div>

						</div>					
						<!--- Box 3 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city5_day1_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city5_day1_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city5_day1_text; ?></div>
							</div>
						</div>
						<!--- Box 4 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city5_day2_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city5_day2_title; ?></h2>
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city5_day2_text; ?></div>
							</div>
						</div>		

						<!--- Box 5 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<div class="current-temp"><img style="float: left;margin-right: 5px;" src="<?php echo $city5_day3_iconURL; ?>" alt=""/></div>
								<h2><?php echo $city5_day3_title; ?></h2>								
								<div class="current-conditions" style="margin-top: 25px;"><?php echo $city5_day3_text; ?></div>
							</div>
						</div>	
				</li>
				
				<li class="glide__slide">	
						<!-- SLIDE 6 News-->
						<!--- Box 2 -->			
						<div class="col-sm-2">
							<h5 class="news-heading" style="color: $292929;">US NEWS &amp;<br>TOP HEADLINES</h5>
						</div>					
						<!--- Box 3 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<h4 class="current-news-title"><strong><?php echo $news1_title; ?></strong></h4>
								<h4><small>Source:&nbsp;<strong><?php echo $news1_source; ?></strong></small></h4>
							</div>
						</div>
						<!--- Box 4 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<h4 class="current-news-title"><strong><?php echo $news2_title; ?></strong></h4>
								<h4><small>Source:&nbsp;<strong><?php echo $news2_source; ?></strong></small></h4>
							</div>
						</div>		

						<!--- Box 5 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<h4 class="current-news-title"><strong><?php echo $news3_title; ?></strong></h4>
								<h4><small>Source:&nbsp;<strong><?php echo $news3_source; ?></strong></small></h4>
							</div>
						</div>	
				</li>		

				<li class="glide__slide">	
						<!-- SLIDE 6 News-->
						<!--- Box 2 -->			
						<div class="col-sm-2">
							<h5 class="news-heading" style="color: $292929;">US NEWS &amp;<br>TOP HEADLINES</h5>
						</div>					
						<!--- Box 3 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<h4 class="current-news-title"><strong><?php echo $news4_title; ?></strong></h4>
								<h4><small>Source:&nbsp;<strong><?php echo $news4_source; ?></strong></small></h4>
							</div>
						</div>
						<!--- Box 4 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<h4 class="current-news-title"><strong><?php echo $news5_title; ?></strong></h4>
								<h4><small>Source:&nbsp;<strong><?php echo $news5_source; ?></strong></small></h4>
							</div>
						</div>		

						<!--- Box 5 -->
						<div class="col-sm-3 box-border">
							<div class="forecast-wrapper">
								<h4 class="current-news-title"><strong><?php echo $news6_title; ?></strong></h4>
								<h4><small>Source:&nbsp;<strong><?php echo $news6_source; ?></strong></small></h4>
							</div>
						</div>	
				</li>					
			
			</ul>
		</div>
	</div>
</div>	
<script>
    $("#Glide").glide({
        type: "carousel",
		mode: "horizontal",
		autoplay: 15000,
		animationDuration: 1000,
		
    });
</script>	
</footer>