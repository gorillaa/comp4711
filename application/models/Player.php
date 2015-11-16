<?php

/**
 * This is a database model for the Packer's roster.
 *
 * @author Dima Goncharov, Darnell Andries
 */
class Player extends MY_Model {
    // Constructor
    public function __construct() {
        parent::__construct('players', 'number');
    }

}
