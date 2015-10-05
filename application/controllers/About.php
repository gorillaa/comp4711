<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application {

	/**
	 * This is the controller for the about page.
         * 
         * @author Luka Bresan
	 */
	public function index()
	{
            $this->data['pagebody'] = 'about';    // this is the view we want shown
            
            $this->render();
	}
}
