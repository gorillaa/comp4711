<?php

/**
 * This is a mock database model for the Packer's roster.
 *
 * @author Dima Goncharov
 */
class Roster extends CI_Model {

    // The data comes from http://www.packers.com/team/players.html
    var $data = array(
        array('number' => '17', 'name' => 'Adams, Davante', 'position' => 'WR', 'height'=>'6-1',
            'weight' => '215', 'age'=>'22', 'exp'=>'2', 'college'=>'Fresno State', 'where'=>'/roster', 'mug' => 'adams-davante.jpg'),
        array('number' => '86', 'name' => 'Backman, Kennard', 'position' => 'TE', 'height'=>'6-3',
            'weight' => '245', 'age'=>'22', 'exp'=>'R', 'college'=>'Alabama-Birmingham', 'where'=>'/roster', 'mug' => 'backman-kennard.jpg')
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }


    // retrieve all of the players
    public function all() {
        return $this->data;
    }


}
