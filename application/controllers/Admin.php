<?php
class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('admin_model');
				$this->load->model('user');
				$this->load->helper('url_helper');
				
        }

        public function index($siteID = NULL)
        {
			
			
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view

				$data['accounts'] = $this->admin_model->get_accounts();
				$data['allAds'] = $this->admin_model->get_ads_by_location();
				$data['adsList'] = $this->admin_model->get_all_ads(); 

				$data['title'] = 'TVCOM Admin';

				if (empty($data['accounts']))
				{
					echo 'Too bad bro no GET data';
				}

				$this->load->view('templates/admin_header', $data);
				$this->load->view('admin/index', $data);
				$this->load->view('templates/admin_footer');
			}else{
            redirect('users/login');
        }			
        }

        public function view($siteID = NULL)
        {
			if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
			$data['accounts_detail'] = $this->admin_model->get_accounts($siteID);


			$data['title'] = "TVCOM Media Locations";

			$this->load->view('templates/admin_header', $data);
			$this->load->view('admin/view', $data);
			$this->load->view('templates/admin_footer');
			}else{
            redirect('users/login');				
			};
        }
	

//Search location by site id or all	
        public function location($siteID = NULL)
        {
			if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
				
				
			$data['accounts'] = $this->admin_model->get_accounts($siteID);
			$data['allAds'] = $this->admin_model->get_ads_by_location($siteID);
			$data['adsList'] = $this->admin_model->get_all_ads(); 
			
				
						
			if (empty($data['accounts']))
			{
				echo 'Too bad bro no GET data';
			}

			$this->load->view('templates/admin_header', $data);
			$this->load->view('admin/locationDetail', $data);
			$this->load->view('templates/admin_footer');
			}
			else
			{
            redirect('users/login');				
			};				
				
        }	
	
//Search Locations by SiteID

        public function searchLocation($siteID = NULL)
        {
			if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
				
			$siteID = $this->input->post('filterSiteID');
			$data['accounts'] = $this->admin_model->get_accounts($siteID);
			$data['allAds'] = $this->admin_model->get_ads_by_location($siteID);
				
				
			$data['title'] = 'TVCOM Admin';
			
			if (empty($data['accounts']))
			{
				echo 'Too bad bro no GET data';
			}

			$this->load->view('templates/admin_header', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('templates/admin_footer');
				
			}else{
            redirect('users/login');				
			};				
        }
	
	
//ADD A Location
	
        public function addLocation()
			
        {
			if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view			
			
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['accounts'] = $this->admin_model->get_accounts();
			
			$data['title'] = 'Create New Location';
			$data['success'] = '';

			$this->form_validation->set_rules('companyName', 'Company', 'required');
			$this->form_validation->set_rules('companyEmail', 'Email Address', 'required');
				

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/admin_header', $data);
				$this->load->view('admin/addLoc');
				$this->load->view('templates/admin_footer');

			}
			else
			{
				$this->admin_model->addLocation();
				$data['success'] = 'New Account Registered!';
				$this->load->view('templates/admin_header', $data);
				$this->load->view('admin/addLoc');
				$this->load->view('templates/admin_footer');
			}	
				
			}else{
            redirect('users/login');				
			};	
			
        }	

	
//ADD A Video
	
        public function addVideo()
			
        {
			
			if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view	
				
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['allAds'] = $this->admin_model->get_all_ads();
			
			$data['title'] = 'Create New Ad';
			$data['success'] = '';


				

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/admin_header', $data);
				$this->load->view('admin/addVideo');
				$this->load->view('templates/admin_footer');

			}
			else
			{
				$this->admin_model->addVideo();
				$data['success'] = 'New Video Added!';
				$this->load->view('templates/admin_header', $data);
				$this->load->view('admin/addVideo');
				$this->load->view('templates/admin_footer');
			}			

			}else{
            redirect('users/login');				
			};					
			
        }		

		
      public function editAccount($siteID = NULL)
			
        {
			
			if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view	
				
				
			$this->load->helper('form');
			$this->load->library('form_validation');				
				
				//Get the weather to edit 
				$data['weatherArray'] = $this->admin_model->get_weather_loc($siteID);
				
				//Get the ads to edit , remember to put adidtional input fields and insert/update
				$data['ads'] = $this->admin_model->get_ads_by_location($siteID);
				
				//Get Account information
				$data['accounts'] = $this->admin_model->get_accounts($siteID);
				
				$this->load->view('templates/admin_header', $data);
				$this->load->view('admin/editAccount');
				$this->load->view('admin/editWeather');
				$this->load->view('templates/admin_footer');
		

			}else{
            redirect('users/login');				
			};					
			
        }		
	
	public function postWeatherLocUpdate($siteID = NULL){
		
		
			$siteID = $this->input->post('siteID');
			
			$data = array(
		
				'weatherLoc1State' => $this->input->post('loc1State'),
				'weatherLoc1City'  => $this->input->post('loc1City'),
				
				'weatherLoc2State' => $this->input->post('loc2State'),
				'weatherLoc2City'  => $this->input->post('loc2City'),
				
				'weatherLoc3State' => $this->input->post('loc3State'),
				'weatherLoc3City'  => $this->input->post('loc3City'),
				
				'weatherLoc4State' => $this->input->post('loc4State'),
				'weatherLoc4City'  => $this->input->post('loc4City'),
				
				'weatherLoc5State' => $this->input->post('loc5State'),
				'weatherLoc5City'  => $this->input->post('loc5City')				
					
			);
		
			$this->db->where('siteID', $siteID);
			$this->db->update('account_weather_locations', $data);
		
		redirect('admin/editAccount/'.$siteID);
	}
	
	public function updateAccountInfo($siteID = NULL){
		
		
			$siteID = $this->input->post('siteID');
		
				$data = array(

				'browserRefresh' => $this->input->post('browserRefresh'),
				'AccountActive' => $this->input->post('accountActive'),
				'accountModified' => date("Y-m-d H:i:s")


				);

				$this->db->where('siteID', $siteID);

				$this->db->update('account_information', $data);

				redirect('admin/editAccount/'.$siteID);
		
		
	}
	
	
}//Closing bracket