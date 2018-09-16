<?php
class Client_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
	
	
	
	
//Get all ads by site ID that are active
		public function get_all_ads($siteID = FALSE)
		{
				

			

				$this->db->select('ad_videos.adPath');
				$this->db->from('ad_videos');
				$this->db->join('ad_locations', 'ad_videos.adID = ad_locations.adID', 'left');
				$this->db->where('ad_locations.siteID', $siteID);
				$this->db->where('ad_videos.adActive', '1');
				$this->db->where('ad_locations.isActive','1');
				$this->db->where('ad_videos.adStartDate <', date("Y-m-d"));
				$this->db->where('ad_videos.adEndDate >', date("Y-m-d"));
				$this->db->order_by('ad_locations.adSort', 'ASC');
				$query = $this->db->get();
				
				return $query->result_array();
			
			
		}
	
		public function get_browser_refresh($siteID = FALSE)
		{	
	
			$this->db->select('browserRefresh');
			$this->db->from('account_information');			
			$this->db->where('siteID', $siteID);
			
			$query = $this->db->get();
			
			return $row = $query->row();
				
		}
	
	
	
	public function get_weather_location($siteID = FALSE){
		
			$this->db->select('*');	
			$this->db->from('account_weather_locations');
			$this->db->where('siteID', $siteID);
			$query = $this->db->get();

			return $query->result_array();		
		
		
	}
	
}//Closing

