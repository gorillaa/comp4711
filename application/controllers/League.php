<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class League extends Application {
	private function set_group_and_order_data() {
		if (empty($this->data['grp_conference'])) {
			$this->data['grp_conference'] = '';
		}
		if (empty($this->data['grp_league'])) {
			$this->data['grp_league'] = '';
		}
		if (empty($this->data['grp_division'])) {
			$this->data['grp_division'] = '';
		}
		if (empty($this->data['ord_name'])) {
			$this->data['ord_name'] = '';
		}
		if (empty($this->data['ord_city'])) {
			$this->data['ord_city'] = '';
		}
		if (empty($this->data['ord_netPts'])) {
			$this->data['ord_netPts'] = '';
		}
		
	}
	private function set_data_for_league($ordValue) {
		$leaguetables;
		$records = $this->team->all_afc($ordValue);

		$afcleaguetable = array();
		$records = $this->team->all_league($ordValue);
		foreach ($records as $record) {
			$nflteams[] = array('id' => $record->id, 'name' => $record->name, 'city' => $record->city,'conference' => $record->conference,'division' => $record->division, 'netPts' => $record->netPts);
		}
		$afcleaguetable['teams'] = $nflteams;
		$afcleaguetable['title'] = "NFL Teams";
		$leaguetables[] = $afcleaguetable;
		
		$this->data['league_tables'] = $leaguetables;
	}
	private function set_data_for_conference($ordValue) {
		$leaguetables;
		$records = $this->team->all_afc($ordValue);

		$afcleaguetable = array();
		$records = $this->team->all_afc($ordValue);
		foreach ($records as $record) {
			$afcteams[] = array('id' => $record->id, 'name' => $record->name, 'city' => $record->city,'conference' => $record->conference,'division' => $record->division, 'netPts' => $record->netPts);
		}
		$afcleaguetable['teams'] = $afcteams;
		$afcleaguetable['title'] = "AFC Teams";
		$leaguetables[] = $afcleaguetable;
		
		$nfcleaguetable = array();
		$records = $this->team->all_nfc($ordValue);
		foreach ($records as $record) {
			$nfcteams[] = array('id' => $record->id, 'name' => $record->name, 'city' => $record->city,'conference' => $record->conference,'division' => $record->division, 'netPts' => $record->netPts);
		}
		$nfcleaguetable['teams'] = $nfcteams;
		$nfcleaguetable['title'] = "NFC Teams";
		$leaguetables[] = $nfcleaguetable;
		
		$this->data['league_tables'] = $leaguetables;
	}
	/**
		 * This is the controller for the football league team list.
			 * 
			 * @author Darnell Andries
		 */
	public function index()
	{
		
		$this->data['pagebody'] = 'leaguelist';    // this is the view we want shown
		// build the list of teams, to pass on to our view
		
		if (empty($this->input->get('groupSelect'))) {
			$this->data['grp_conference'] = ' selected';
			$groupValue = "conference";
		} else {
			$this->data['grp_' . $this->input->get('groupSelect')] = ' selected';
			$groupValue = $this->input->get('groupSelect');
		}
		if (empty($this->input->get('orderSelect'))) {
			$this->data['ord_name'] = ' selected';
			$ordValue = "name";
		} else {
			$this->data['ord_' . $this->input->get('orderSelect')] = ' selected';
			$ordValue = $this->input->get('orderSelect');
		}
		
		$this->set_group_and_order_data();
		
		if ($groupValue == 'conference') {
			$this->set_data_for_conference($ordValue);
			
		} else if ($groupValue == 'league') {
			$this->set_data_for_league($ordValue);
		}
		
		$this->render();

	}
	
	
}
