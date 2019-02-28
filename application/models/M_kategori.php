<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_kategori
 *
 * @author Sigit Suryono
 */
class M_kategori extends CI_Model {

    //put your code here
    function getKategori() {
        return $this->db->get('kategori_kelas')->result();
    }

    function getWhereKategoriKelas($condition) {
        return $this->db->get_where('kategori_kelas', $condition)->row();
    }

    function getKategoriById($id) {
        return $this->db->query('SELECT harga FROM kategori_kelas WHERE id=' . $id)->result_array();
    }

    function getPosisi() {
        return $this->db->query("SELECT * FROM posisi ORDER BY nama_posisi")->result();
    }

    function getKategoriGallery() {
        return $this->db->get('kategori_gallery')->result();
    }

    function getWhereKategoriGallery($condition) {
        return $this->db->get_where('kategori_kelas', $condition)->row();
    }

    function getKategoriPortofolio() {
        return $this->db->get('kategori_portofolio')->result();
    }

    function getWhereKategoriPortofolio($condition) {
        return $this->db->get_where('kategori_kelas', $condition)->row();
    }

    function tambahKategori($tabel, $objectData) {
        $this->db->insert($tabel, $objectData);
        return $this->db->affected_rows();
    }

    function updateKategori($table, $objectData, $condition) {
        $this->db->where($condition);
        $this->db->update($table, $objectData);
        return $this->db->affected_rows();
    }

    function insertPosisi($objectData) {
        $this->db->insert('posisi', $objectData);

        return $this->db->affected_rows();
    }

}
