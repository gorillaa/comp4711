<?php

/**
 * This is a mock database model for the league teams.
 *
 * @author Darnell Andries
 */
class Team extends MY_Model {
	public function __construct() {
		parent::__construct('teams');
	}

	public function all_league($order) {
		return $this->all_and_order($order, 'asc');
	}
        
    public function all(){
        $this->db->order_by("conference", "asc");        
        $this->db->order_by("division", "asc");
        $query = $this->db->get('teams');
        return $query->result_array();
    }
	
    public function all_afc($order) {
        return $this->some_and_order("conference", "AFC", $order, 'asc');
    }

    public function all_nfc($order) {
        return $this->some_and_order("conference", "NFC", $order, 'asc');
    }

}
