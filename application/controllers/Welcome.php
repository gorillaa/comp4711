<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	/**
	 * This is the controller for the homepage.
         * 
         * @author Luka Bresan
	 */
	public function index()
	{
            $this->data['pagebody'] = 'homepage';    // this is the view we want shown
            $teams = $this->team->all();
            $list = array();
            
	    foreach ($teams as $team) {
	        $list[$team["name"]] = $team["name"];
	    }
            
	    $this->data['selection'] =  form_dropdown('teams', $list, '', 'id="teams"');
            
            //$results = predict($this->input->post('team'));
            
            if ($this->input->server('REQUEST_METHOD') == 'POST'){
                //TODO: replace NULL with $results
                $this->data['prediction'] = $this->load->view("result_view", NULL, TRUE);
            } else {
                $this->data['prediction'] = "";
            }
             
            
            $this->render();
	}
        
        public function predict(){
            
            //TODO: implement prediction here
            //return array
            
        }
}
