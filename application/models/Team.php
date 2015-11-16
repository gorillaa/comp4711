<?php

/**
 * This is a mock database model for the league teams.
 *
 * @author Darnell Andries
 */
class Team extends MY_Model {
	public function __construct() {
		parent::__construct('teams');
	}

    public function all_afc() {
        return $this->some("conference", "AFC");
    }

    public function all_nfc() {
        return $this->some("conference", "NFC");
    }

}
