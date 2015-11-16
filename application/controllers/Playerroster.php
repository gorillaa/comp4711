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
            $layout = $this->session->userdata('layout');
            if($layout == '') $layout = 'rostertable';
            
            $this->data['pagebody'] = $layout;    // this is the view we want show
            
            $config['first_link'] = "&lt;&lt; First";
            $config['last_link'] = "Last &gt;&gt;";
            $config = array();
            $config["base_url"] = base_url() . "playerroster";
            $config["total_rows"] = $this->player->size();
            $config["per_page"] = 12;
            $config["uri_segment"] = 2;
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = round($choice);
            $order = $this->session->userdata('order');
            if($order == '') $order = 'name';

            
            
            $this->pagination->initialize($config);
            
            $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

            
             $this->data["roster"] = $this->player->fetch_players($config["per_page"], $page, $order);
             $this->data["page"] = $page;
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
        
        public function layout($layout){
            $this->load->library('session');
            $newdata = array(
                   'layout'         => $layout
               );
            $this->session->set_userdata($newdata);
            $this->index();
        
        }
}
