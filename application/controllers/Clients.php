<?php
class Clients extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('client_model');
				$this->load->helper('url_helper');
				
        }
	
	

        public function location($siteID = NULL)
        {
		
				
				$data['ad_videos'] = $this->client_model->get_all_ads($siteID);
				$data['browser_refresh'] = $this->client_model->get_browser_refresh($siteID);
				$data['weather'] = $this->client_model->get_weather_location($siteID);



				if (empty($data['ad_videos']))
				{
					echo 'Too bad bro no GET data';
				}

				$this->load->view('client/header', $data);
				//$this->load->view('client/weather', $data);			
			    //$this->load->view('client/news', $data);	
				$this->load->view('client/location', $data);    ///CHANGE TO LOCATION AFTER TESTING
				$this->load->view('client/footer', $data);
		
        }
	
	
	
	
}//Closing