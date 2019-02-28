<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_profile
 *
 * @author Sigit Suryono
 */
class M_profile extends CI_Model {

    //put your code here

    function getProfile($table, $where) {
        return $this->db->get_where($table, $where)->result();
    }

    function insertProfile($table, $set) {
        $this->db->insert($table, $set);
        return $this->db->affected_rows();
    }

    function editProfile($table, $condition, $data) {
        $this->db->where($condition);
        $this->db->update($table, $data);
    }

}
