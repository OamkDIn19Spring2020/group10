<?php
	class Stop_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}public function get_stops($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('stops');
				return $query->result_array();
			}

			$query = $this->db->get_where('stops', array('slug' => $slug));
			return $query->row_array();
        }
    }