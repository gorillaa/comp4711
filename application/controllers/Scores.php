<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Scores extends Application {
    /*
        The controller which fetches scores via RPC,
        stores them in the database, and displays them to the user.

        @author Luka Bresan, Darnell Andries
    */
    function __construct() {
        parent::__construct();
    }

    function index() {

        $xmlin = array();
        $this->load->library('xmlrpc');
        $this->xmlrpc->server("nfl.jlparry.com/rpc", 80);
        $this->xmlrpc->method('since');

        $request = array('19000101');
        $this->xmlrpc->request($request);

        if (!$this->xmlrpc->send_request()) {
            $this->data['scores'] = $this->xmlrpc->display_error();
            $this->render();
            return;
        }

        $xmlin = $this->xmlrpc->display_response();

        $scores = array();
        foreach ($xmlin as $key => $value) {
            if ($this->score->exists($value['number']))
                continue;

            $scorein = explode(":", $value['score']);

            $date = $value['date'];
            $id = $value['number'];
            $record = $this->score->create();
            $record->hometeam = $value['home'];
            $record->awayteam = $value['away'];
            $record->homescore = $scorein[0];
            $record->awayscore = $scorein[1];
            $record->date = $date;
            $record->id = $id;
            $this->score->add($record);
        }
        $allscores = $this->score->all();
        $scores = array();
        foreach ($allscores as $score) {
            $scores[] = array('hometeam' => $score->hometeam,
                              'awayteam' => $score->awayteam,
                              'homescore' => $score->homescore,
                              'awayscore' => $score->awayscore,
                              'date' => $score->date);
        }
        $this->data['scores'] = $scores;
        $this->data['pagebody'] = 'scoresview';
        $this->render();
    }
}
