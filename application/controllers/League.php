<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class League extends Application {
	public function index()
	{
		$this->data['pagebody'] = 'leaguelist';    // this is the view we want shown
        // build the list of authors, to pass on to our view
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
