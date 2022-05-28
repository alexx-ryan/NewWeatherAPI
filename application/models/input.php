<?php

class inputModel extends CI_Model {

    public function get_inputs() {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM 'user_inputs'");
        return $query->result_array();


    }
}