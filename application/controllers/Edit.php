<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dash
 *
 * @author Sigit Suryono
 */
class Edit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('nama')) {
            redirect('infront');
        }
    }

    function edit_class($idKelas) {
        $this->load->view('headfoot/header');
        $data['kategori'] = $this->M_kategori->getKategori();
        $data['kontenKelas'] = $this->M_kelas->getKelasBy($idKelas);
        $data['title'] = "Edit Kelas";
        $this->load->view('add_class', $data);
        $this->load->view('headfoot/footer');
    }

    function edit_news_blog($idBerita) {
        $this->load->view('headfoot/header');
        $data['title'] = "Edit Berita";
        $data['news'] = $this->M_news->daftarBeritaBy($idBerita);
        $this->load->view('add_news', $data);
        $this->load->view('headfoot/footer');
    }

    function edit_testimoni($idTestimoni) {
        $this->load->view('headfoot/header');
        $data['title'] = "Edit Testimoni";
        $data['testimoni'] = $this->M_testimoni->daftarTestimoniBy($idTestimoni);
        $this->load->view('add_testimoni', $data);
        $this->load->view('headfoot/footer');
    }

    function edit_team($idTeam) {
        $this->load->view('headfoot/header');
        $data['posisi'] = $this->M_kategori->getPosisi();
        $data['title'] = "Edit Team";
        $data['team'] = $this->M_team->daftarTeamBy($idTeam);
        $this->load->view('add_team', $data);
        $this->load->view('headfoot/footer');
    }

    function edit_gallery($idGallery) {
        $this->load->view('headfoot/header');
        $data['title'] = "Edit Gallery";
        $data['gallery'] = $this->M_gallery->daftarGallerysBy($idGallery);
        $data['kategori'] = $this->M_kategori->getKategoriGallery();
        $this->load->view('add_gallery', $data);
        $this->load->view('headfoot/footer');
    }

    function edit_portofolio($idPortofolio) {
        $this->load->view('headfoot/header');
        $data['title'] = "Edit Portofolio";
        $data['kategori'] = $this->M_kategori->getKategoriPortofolio();
        $data['content'] = $this->M_portofolio->daftarPortofolioBy($idPortofolio);
        $this->load->view('add_portofolio', $data);
        $this->load->view('headfoot/footer');
    }

    function edit_side_bar() {
        $this->load->view('headfoot/header');
        $data['kelas'] = $this->M_kelas->daftarKelas();
        $this->load->view('edit_side_bar', $data);
        $this->load->view('headfoot/footer');
    }

    function edit_kategori($params) {
        $this->load->view('headfoot/header');
        $data['content'] = $this->M_kategori->getWhereKategoriKelas(array('id' => $params));
        $this->load->view('add_category', $data);
        $this->load->view('headfoot/footer');
    }

}
