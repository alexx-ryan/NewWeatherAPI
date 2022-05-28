<?php

class inputModel extends CI_Model {

    public function get_inputs() {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM 'api_responses'");
        return $query->result_array();


    }
}