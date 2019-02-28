<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_kelas
 *
 * @author Sigit Suryono
 */
class M_kelas extends CI_Model {

	//put your code here

	function getKelasBy($idkelas) {
		$query = "SELECT *, kelas.nama as nama_kelas, kategori_kelas.nama as nama_kategori, kelas.deskripsi as deskripsi_kelas FROM kelas INNER JOIN kategori_kelas ON kelas.id_kategori=kategori_kelas.id WHERE kelas.id_kelas='$idkelas' ORDER BY id_kelas ASC";
		return $this->db->query($query)->row();
	}

	function daftarKelas() {
		$query = "SELECT *, kelas.nama as nama_kelas, kategori_kelas.nama as nama_kategori, kelas.deskripsi as deskripsi_kelas FROM kelas INNER JOIN kategori_kelas ON kelas.id_kategori=kategori_kelas.id ORDER BY id_kelas ASC ";
		return $this->db->query($query)->result();
	}

	function insertKelas($objectData) {
		$this->db->insert('kelas', $objectData);
		return $this->db->affected_rows();
	}

	function editKelas($object, $condition) {
		$this->db->where($condition);
		$this->db->update('kelas', $object);

		return $this->db->affected_rows();
	}

	function hapusKelas($condition) {
		$this->db->where($condition);
		$this->db->delete('kelas');

		return $this->db->affected_rows();
	}

}
