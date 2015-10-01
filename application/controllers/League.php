<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class League extends Application {
	public function index()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get($id);
        
		$this->data['who'] =  $record['who'];
		$this->data['mug'] = $record['mug'];
       	$this->data['what'] = $record['what'];
	    
	
        $this->render();
	}
}
