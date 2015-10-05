<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayerRoster extends Application {

	/**
	 * This is the controller for the Packer's player roster.
         * 
         * @author Dima Goncharov
	 */
	public function index()
	{
            $this->data['pagebody'] = 'roster';    // this is the view we want show
            
            $source = $this->roster->all();
            $roster = array();
            foreach ($source as $record) {
                $roster[] = array('name' => $record['name'], 'number' => $record['number'], 'position' => $record['position'],
                                  'height' => $record['height'], 'weight' => $record['weight'], 'age' => $record['age'], 
                                  'exp' => $record['exp'], 'college' => $record['college'], 'mug' => $record['mug']  );
            }
            $this->data['roster'] = $roster;

            $this->render();
	}
}
