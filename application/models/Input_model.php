<?php

class Input_model extends CI_Model {

    public function get_inputs() {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM `inputs`");
        return $query->result_array();


    }
}