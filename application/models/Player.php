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
    
            
        public function fetch_players($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by($this->_keyField, 'asc');
        $query = $this->db->get($this->_tableName);
        $roster = array();
        $source = $query->result();

       
            foreach ($source as $record) {
                $roster[] = array('name' => $record->name, 'number' => $record->number, 'position' => $record->position,
                                  'height' => $record->height, 'weight' => $record->weight, 'age' => $record->age, 
                                  'exp' => $record->exp, 'mug' => $record->mug  );
            }
            return $roster;
        
        }

}
