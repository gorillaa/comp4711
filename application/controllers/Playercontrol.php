<?php

/**
* This is the controller for the CRUD operations upon the Player model.
*
* @author Darnell Andries
*/

class PlayerControl extends Application {
    /*
        A controller which allows CRUD operations upon the Player model.

        @author Darnell Andries
    */
    protected $validPositions = array("C","DB","DE","DL","DT","E","FB","FL",
        "G","HB","K","LB","MLB","NG","NT","OG","OL","OLB","OT","P","QB",
        "RB","S","SE","T","TB","TE","WB","WR");

    function __construct()
    {
	parent::__construct();
        $this->load->helper('formfields');
    }

    function add()
    {
        $player = $this->player->create();
        $this->session->set_userdata("currplayer", $player);
        $this->present();
    }

    function edit($number)
    {
        if (!$this->player->exists($number))
            redirect("/playerroster");
        $player = $this->player->get($number);
        $this->session->set_userdata("currplayer", $player);
        $this->present(true);
    }

    function post()
    {
        $record = $this->player->create();

        $record->number = $this->input->post('number');
        $record->name = $this->input->post('name');
        $record->position = $this->input->post('position');
        $record->height = $this->input->post('height');
        $record->weight = $this->input->post('weight');
        $record->age = $this->input->post('age');
        $record->exp = $this->input->post('exp');
        //$record->mug = $this->input->post('mug');


         // validation
        if (empty($record->name))
          $this->errors[] = 'You must specify a name.';
        if ($this->player->exists($record->number) && $this->input->post("edit") != $record->number)
          $this->errors[] = 'Player with specified jersey number already exists.';
        if (empty($record->position))
          $this->errors[] = 'You must specify a position.';
        else if (!in_array($record->position, $this->validPositions))
          $this->errors[] = 'You must specify a valid position.';
        if (empty($record->height))
          $this->errors[] = 'You must specify a height.';
        if (empty($record->weight))
          $this->errors[] = 'You must specify a weight.';
        if (empty($record->age) || intval($record->age) == 0)
          $this->errors[] = 'You must specify an age.';
        if (empty($record->exp))
          $this->errors[] = 'You must specify experience.';
        if (empty($_FILES['mug']['name']) && empty($this->input->post("edit")))
            $this->errors[] = 'Mugshot must be provided.';

        if (!empty($_FILES['mug']['name'])) {
            $config['upload_path']          = './data/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 2024;
            $config['max_height']           = 2024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('mug'))
            {
                $this->errors[] = $this->upload->display_errors();
            }
            else
            {
                $record->mug = $this->upload->data('file_name');
            }
        } else {
            $record->mug = $this->session->userdata("currplayer")->mug;
        }

        // redisplay if any errors
        if (count($this->errors) > 0) {
          if (empty($this->input->post("edit")))
              $this->session->set_userdata("currplayer", $record);
          $this->present(!empty($this->input->post("edit")));
          return; // make sure we don't try to save anything
        }
        // Save stuff
        if (empty($this->input->post('edit')))
            $this->player->add($record);
        else
            $this->player->update($record);
        redirect('/playerroster');
    }

    function delete($number)
    {
        if (!$this->player->exists($number))
            redirect("/playerroster");
        $this->player->delete($number);
        redirect('/playerroster');
    }

    function present($edit = false)
    {

        $player = $this->session->userdata("currplayer");

        $message = '';
        if (count($this->errors) > 0) {
          foreach ($this->errors as $booboo)
            $message .= $booboo . '<BR>';
        }
        if ($edit) {
            $this->data['fedit'] = '<input type="hidden" name="edit" value="' . $player->number . '">';
            $this->data['fdelete'] = '<a class="btn btn-danger" href="/playercontrol/delete/' . $player->number . '">Delete</a>';
        } else {
            $this->data['fedit'] = '';
            $this->data['fdelete'] = '';
        }
        $this->data['message'] = $message;
        $this->data['fnumber'] = makeTextField('Number#', 'number', $player->number);
        $this->data['fname'] = makeTextField('Name', 'name', $player->name);
        $this->data['fposition'] = makeTextField('Position', 'position', $player->position);
        $this->data['fheight'] = makeTextField('Height', 'height', $player->height);
        $this->data['fweight'] = makeTextField('Weight', 'weight', $player->weight);
        $this->data['fage'] = makeTextField('Age', 'age', $player->age);
        $this->data['fexp'] = makeTextField('Exp', 'exp', $player->exp);
        $this->data['fmug'] = '<label class="btn btn-primary" for="mug">Select Mugshot' .
                '<input type="file" id="mug" name="mug" size="20" style="display:none;" /></label><br><br>' ;
        $this->data['pagebody'] = 'player_edit';
        $this->data['fsave'] = makeSubmitButton('Save', "Click here to validate the player data", 'btn-success');
        $this->data['fcancel'] = '<a class="btn btn-primary" href="/playerroster">Cancel</a>';
        $this->render();
    }
}
