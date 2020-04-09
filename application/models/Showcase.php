<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Showcase extends CI_Model {

    function getData() {
        $response = array();
        $this->db->select('*')->limit(10)->order_by('id', 'RANDOM');
        $q = $this->db->get('showcase');
        $response = $q->result_array();
        return $response;
    }

}