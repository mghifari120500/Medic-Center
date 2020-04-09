<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Obat extends CI_Model {

    function getData() {
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('obat');
        $response = $q->result_array();
        return $response;
    }

}