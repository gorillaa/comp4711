<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayerRoster extends Application {

	/**
	 * This is the controller for the Packer's player roster.
         * 
         * @author Dima Goncharov
	 */
	public function index($page = 1)
	{
            $this->load->library("pagination");
            $this->load->helper("url");
            $this->load->library('session');
            $this->data['pagebody'] = 'roster';    // this is the view we want show
            
            $config = array();
            $config["base_url"] = base_url() . "playerroster";
            $config["total_rows"] = $this->player->size();
            $config["per_page"] = 12;
            $config["uri_segment"] = 2;
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = round($choice);
            $order = $this->session->userdata('order');
            //$config['use_page_numbers']  = TRUE;
            
            
            $this->pagination->initialize($config);
            
            $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
            
            /**
            $source = $this->player->all();
            $roster = array();
            foreach ($source as $record) {
                $roster[] = array('name' => $record->name, 'number' => $record->number, 'position' => $record->position,
                                  'height' => $record->height, 'weight' => $record->weight, 'age' => $record->age, 
                                  'exp' => $record->exp, 'mug' => $record->mug  );
            }
            $this->data['roster'] = $roster;
 
             */
            
             $this->data["roster"] = $this->player->fetch_players($config["per_page"], $page, $order);
             $this->data["page"] = $page;
            // $this->data["order"] = $order;
             $this->data["links"] = $this->pagination->create_links();

             $this->render();
	}
        
        public function order($order){
            $this->load->library('session');
            $newdata = array(
                   'order'         => $order
               );
            $this->session->set_userdata($newdata);
            $this->index();
        
        }
}
