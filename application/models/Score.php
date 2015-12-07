<?php
class Score extends MY_Model {
  /**
   * This is a database model to store NFL game scores.
   *
   * @author Darnell Andries
   */
    public function __construct() {
        parent::__construct('scores');
    }

    function getscores($teamcode) {
        $records = $this->some_some_and_order('hometeam', $teamcode, 'awayteam', $teamcode, 'date', 'desc');
        return $records;
    }
}
