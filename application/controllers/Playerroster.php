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

            $this->data['additionalMenuBar'] = '<ul class="nav"><li><a href="/playerroster/toggleEditMode">Toggle Edit Mode</a></li></ul>';


            $config = array();
            $config["base_url"] = base_url() . "playerroster";
            $config["total_rows"] = $this->player->size();
            $config["per_page"] = 12;
            $config["uri_segment"] = 2;
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = round($choice);
            $config["first_link"] = round("First");
            $order = $this->session->userdata('order');
            if($order == '') $order = 'name';


            $this->pagination->initialize($config);

            $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;


            
             //$this->data["roster"] = $this->player->fetch_players($config["per_page"], $page, $order);
             $this->data["page"] = $page;

            if (!$this->session->has_userdata("editmode") || $this->session->userdata('editmode') != 1) {
                $this->data['singlecontrol'] = '/playerroster/view/';
                $this->data['addBtn'] = '';
                $menubarlabel = "Turn Edit Mode On";
            } else {
                $this->data['singlecontrol'] = '/playercontrol/edit/';
                $this->data['addBtn'] = '<a class="btn btn-primary" href="/playercontrol/add">Add New</a>';
                $menubarlabel = "Turn Edit Mode Off";
            }
            $this->data['additionalMenuBar'] = '<ul class="nav"><li><a href="/playerroster/toggleEditMode">' . $menubarlabel . '</a></li></ul>';


             $this->data["roster"] = $this->player->fetch_players($config["per_page"], $page ,$order, $this->data['singlecontrol']);

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
        

        public function view($number) {
            if (!$this->player->exists($number))
                redirect("/playerroster");

            $record = $this->player->get($number);
            $this->data = array_merge($this->data, array('name' => $record->name, 'number' => $record->number, 'position' => $record->position,
                              'height' => $record->height, 'weight' => $record->weight, 'age' => $record->age,
                              'exp' => $record->exp, 'mug' => $record->mug, 'pagebody' => 'player_view'));

            $this->render();
        }

        public function toggleEditMode() {
            if (!$this->session->has_userdata("editmode") || $this->session->userdata('editmode') != 1) {
                $this->session->set_userdata('editmode', 1);
            } else {
                $this->session->set_userdata('editmode', 0);
            }
            redirect("/playerroster");

        }
}
