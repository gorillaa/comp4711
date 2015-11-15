<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class League extends Application {
	public function index()
	{
		/**
		 * This is the controller for the football league team list.
			 * 
			 * @author Darnell Andries
		 */
		$this->data['pagebody'] = 'leaguelist';    // this is the view we want shown
        // build the list of teams, to pass on to our view
        $records = $this->leagueteams->all_afc();

		foreach ($records as $record) {
            $afcteams[] = array('id' => $record['id'], 'team' => $record['team']);
        }
		$records = $this->leagueteams->all_nfc();

		foreach ($records as $record) {
            $nfcteams[] = array('id' => $record['id'], 'team' => $record['team']);
        }

		$this->data['afcteams'] = $afcteams;
		$this->data['nfcteams'] = $nfcteams;
        $this->render();
	}
}
