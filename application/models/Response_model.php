<?php

class Response_model extends CI_Model {

    public function get_response($id) {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM `responses` WHERE `id`=$id");
        return $query->result_array();


    }
}