<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_news
 *
 * @author Sigit Suryono
 */
class M_news extends CI_Model {

    //put your code here
    function daftarBeritaBy($idBerita) {
        return $this->db->get_where('news', array('id' => $idBerita))->row();
    }

    function daftarBerita() {
        return $this->db->get('news')->result();
    }
    
    function beritaInfront() {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(4);
        return $this->db->get()->result();
    }

    function insertBerita($objectData) {
        $this->db->insert('news', $objectData);
        return $this->db->affected_rows();
    }

    function editBerita($object, $condition) {
        $this->db->where($condition);
        $this->db->update('news', $object);

        return $this->db->affected_rows();
    }

    function hapusBerita($condition) {
        $this->db->where($condition);
        $this->db->delete('news');

        return $this->db->affected_rows();
    }

}
