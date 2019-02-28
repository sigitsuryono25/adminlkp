<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_testimoni
 *
 * @author Sigit Suryono
 */
class M_testimoni extends CI_Model {

    //put your code here
    function daftarTestimoniBy($idtestimoni) {
        return $this->db->get_where('testimoni', array('id' => $idtestimoni))->row();
    }

    function daftarTestimoni() {
        return $this->db->get('testimoni')->result();
    }

    function insertTestimoni($objectData) {
        $this->db->insert('testimoni', $objectData);
        return $this->db->affected_rows();
    }

    function editTestimoni($object, $condition) {
        $this->db->where($condition);
        $this->db->update('testimoni', $object);

        return $this->db->affected_rows();
    }

    function hapusTestimoni($condition) {
        $this->db->where($condition);
        $this->db->delete('testimoni');

        return $this->db->affected_rows();
    }

}
