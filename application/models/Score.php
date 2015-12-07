<?php
class Score extends MY_Model {

    public function __construct() {
        parent::__construct('scores');
    }

    function getscores($teamcode) {
        $records = array($this->some('hometeam', $teamcode), $this->some('awayteam', $teamcode));
        return $records;
    }
}
