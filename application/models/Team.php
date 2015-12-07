<?php

class Team extends MY_Model {
	/**
	 * This is a database model for the NFL league teams.
	 *
	 * @author Darnell Andries
	 */
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

		public function load_table() {
			$url = "http://nfl.jlparry.com/standings";
			$xml = simplexml_load_file($url);

			foreach ($xml as $team) {
					$record = $this->team->create();
					$record->code = $team["code"];
					$record->name = $team->fullname;
					$record->conference = $team["conference"];
					$record->division = $team["division"];
					$record->netPts = $team->totals->net;
					$record->pointsfor = $team->totals->for;
					$record->pointsagainst = $team->totals->against;
					$record->home = $team->breakdown->home;
					$record->road = $team->breakdown->road;
					$this->team->add($record);

			}
		}

}
