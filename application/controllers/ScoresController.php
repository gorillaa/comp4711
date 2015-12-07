<?php

defined('BASEPATH') OR exit('No direct script access allowed');
define('LOCAL', false);
class ScoresController extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $list = array();
        $this->load->library('xmlrpc');
        $this->xmlrpc->server("nfl.jlparry.com/rpc", 80);
        $this->xmlrpc->method('since');
        $request = array('19321203');
        $this->xmlrpc->request($request);

        if (!$this->xmlrpc->send_request()) {
            echo $this->xmlrpc->display_error();
        } else {

        }

        $list = $this->xmlrpc->display_response();
    }

    $this->scoresmodel->delete();
    $scores = array();
    foreach ($list as $key => $value) {
        $scorearray = explode(":", $value['score']);
        $homecode = $value['home'];
        $awaycode = $value['away'];
        $awayscore = $scoreSet[0];
        $homescore = $scoreSet[1];
        $date = $value['date'];
        $scoreentry = $value['number'];
        $row = array(
            'scoreentry' => $scoreentry,
            'home' => $homecode,
            'away' => $awaycode,
            'date' => $date,
            'homescore' => $homescore,
            'awayscore' => $awayscore
        );
        $scores[] = $row;
        $this->scoresmodel->add(
            $homecode,
            $awaycode,
            $homescore,
            $awayscore,
            $date,
            $scoreentry);
    }

    $this->data['scores'] = $scores;
    $this->data['pagebody'] = 'scoresview';
    $this->render();
}
