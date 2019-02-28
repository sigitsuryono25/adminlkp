<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_gallery
 *
 * @author Sigit Suryono
 */
class M_gallery extends CI_Model {

    //put your code here

    function daftarGallerysBy($idGallery) {
        return $this->db->get_where('gallery', array('id' => $idGallery))->row();
    }

    function daftarGallery() {
        $query = "SELECT *, gallery.id as id_gallery FROM gallery INNER JOIN kategori_gallery ON gallery.kategori=kategori_gallery.id ORDER BY gallery.id ASC";
        return $this->db->query($query)->result();
    }

    function insertGallery($objectData) {
        $this->db->insert('gallery', $objectData);
        return $this->db->affected_rows();
    }

    function editGallery($object, $condition) {
        $this->db->where($condition);
        $this->db->update('gallery', $object);

        return $this->db->affected_rows();
    }

    function hapusGallery($condition) {
        $this->db->where($condition);
        $this->db->delete('gallery');

        return $this->db->affected_rows();
    }

}
