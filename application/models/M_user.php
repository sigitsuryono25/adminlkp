<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_user
 *
 * @author Sigit Suryono
 */
class M_user extends CI_Model {

    //put your code here

    function getCredentials($username) {
        return $this->db->get_where('credentials', array("username" => $username))->result();
    }

    function updateLastLogin($condition, $objectData) {
        $this->db->where($condition);
        $this->db->update('credentials', $objectData);
    }

    function getDaftarCredentials() {
        return $this->db->get('credentials')->result();
    }

    function insertCredentials($objectData) {
        $this->db->insert('credentials', $objectData);
        return $this->db->affected_rows();
    }

    function hapusCredentials($condition) {
        $this->db->where($condition);
        $this->db->delete('credentials');
        return $this->db->affected_rows();
    }

    function editCredentials($objectData, $condition) {
        $this->db->where($condition);
        $this->db->update('credentials', $objectData);

        return $this->db->affected_rows();
    }

}
