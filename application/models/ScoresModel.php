<?php
class ScoresModel extends MY_Model {

    public function __construct() {
        parent::__construct('game_history', 'HISTORYID');
    }

    public function all() {

    }

    function add($homecode, $awaycode, $homescore, $awayscore, $date, $scoreentry) {
        $record = $this->create();
        $record->homeTeam = $homecode;
        $record->awayTeam = $awaycode;
        $record->homeScore = $homescore;
        $record->awayScore = $awayscore;
        $record->date = $date;
        $record->scoreEntry = $scoreentry;
        $this->add($record);
    }

    function getscoresforteam($teamcode) {
        $records = array($this->some('HOMETEAMCODE', $teamcode), $this->some('AWAYTEAMCODE', $teamcode));
        return $records;
    }

    function delete() {
        $this->deleteall();
    }
}
