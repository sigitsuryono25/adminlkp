<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Delete
 *
 * @author Sigit Suryono
 */
class Delete extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
    }

    function delete_class($param) {
        $this->M_kelas->hapusKelas(array('id_kelas' => $param));
        redirect('daftar/daftar_kelas/!#kelas');
    }

    function delete_news($param) {
        $this->M_news->hapusBerita(array('id' => $param));
        redirect('daftar/daftar_news/!#news');
    }

    function delete_team($param) {
        $this->M_team->hapusTeam(array('id' => $param));
        redirect('daftar/daftar_team/!#team');
    }

    function delete_testimoni($param) {
        $this->M_testimoni->hapusTestimoni(array('id' => $param));
        redirect('daftar/daftar_testimoni/!#testimoni');
    }

    function delete_gallery($param) {
        $this->M_gallery->hapusGallery(array('id' => $param));
        redirect('daftar/daftar_gallery/!#gallery');
    }
    function delete_portofolio($param) {
        $this->M_portofolio->hapusPortofolio(array('id'=> $param));
        redirect('daftar/daftar_portofolio/!#portofolio');
    }

}
