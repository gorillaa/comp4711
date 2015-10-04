<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class League extends Application {
	public function index()
	{
				$this->data['pagebody'] = 'leaguelist';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $records = $this->leagueteams->all_afc();

				foreach ($records as $record) {
            $teams[] = array('id' => $record['id'], 'team' => $record['team']);
        }

				$this->data['teams'] = $teams;
        $this->render();
	}
}
