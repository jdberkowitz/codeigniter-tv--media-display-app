<?php
class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

	
//Get accounts all accounts or by siteID
		public function get_all_ads()
		{
				
				$query = $this->db->get('ad_videos');
				return $query->result_array();
		}	
	
//Get accounts all accounts or by siteID
		public function get_accounts($siteID = FALSE)
		{
				if ($siteID === FALSE)
				{
				$this->db->select('*');
				$this->db->from('account_information');

				$query = $this->db->get();
				return $query->result_array();
				}

				$this->db->select('*');
				$this->db->from('account_information');
				$this->db->where('siteID', $siteID);
				$query = $this->db->get();
				return $query->result_array();
		}

	
//get ads by location by siteID
		public function get_ads_by_location($siteID = FALSE)
		{
				if ($siteID === FALSE)
				{
						$this->db->select('ad_videos.*, account_information.companyName, account_information.siteID, ad_locations.adSort', FALSE);
						$this->db->from('ad_videos');
						$this->db->join('ad_locations', 'ad_videos.adID = ad_locations.adID', 'left');
						$this->db->join('account_information', 'ad_locations.siteID = account_information.siteID');
						$query = $this->db->get();
						return $query->result_array();
				}

						$this->db->select('ad_videos.*, account_information.companyName, account_information.siteID, ad_locations.adSort', FALSE);
						$this->db->from('ad_videos');
						$this->db->join('ad_locations', 'ad_videos.adID = ad_locations.adID', 'left');
						$this->db->join('account_information', 'ad_locations.siteID = account_information.siteID');
						$this->db->where('ad_locations.siteID', $siteID);
						
						$query = $this->db->get();
						return $query->result_array();
		}	

//Add new Display Location	
			public function addLocation(){

				$accountCreated = date("Y-m-d H:i:s");
				$accountModified = date("Y-m-d H:i:s");

				$data = array(
					
					'companyName' => $this->input->post('companyName'),
					'companyEmail' => $this->input->post('companyEmail'),
					'companyContact' => $this->input->post('companyContact'),
					'companyAddress' => $this->input->post('companyAddress'),
					'companyState' => $this->input->post('companyState'),
					'companyCity' => $this->input->post('companyCity'),
					'companyZip' => $this->input->post('companyZip'),
					'contractDateStart' => $this->input->post('contractDateStart'),
					'contractDateEnd' => $this->input->post('contractDateEnd'),
					'accountActive' => $this->input->post('accountActive'),
					'accountCreated' => $accountCreated,
					'accountModified' => $accountModified,
					//Add created date/time
					//Add zone table and foreign key
				);


				return $this->db->insert('account_information', $data);


			}
	
	
	//Add New Media AD to the DB
		public function addVideo(){
						
				$adCreated = date("Y-m-d H:i:s");
				


				$data = array(
					
					'adName' => $this->input->post('adName'),
					'adType' => $this->input->post('adType'),
					'adPath' => $this->input->post('adPath'),
					'adStartDate' => $this->input->post('adStartDate'),
					'adEndDate' => $this->input->post('adEndDate'),
					'adCreated' => $this->input->post($adCreated)

					
					
				);


				return $this->db->insert('ad_videos', $data);


			}
	
	
	//Get Weather location by siteID
		public function get_weather_loc($siteID = FALSE){
			
			
			$this->db->select('*');
			$this->db->from('account_weather_locations');
			$this->db->where('siteID', $siteID);
			$query = $this->db->get();
			
			return $query->result_array();
			
			
		}
	
	
	



		}//closing last bracket
