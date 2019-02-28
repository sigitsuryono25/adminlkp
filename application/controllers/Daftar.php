<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of List
 *
 * @author Sigit Suryono
 */
class Daftar extends CI_Controller {

    //put your code here
    function daftar_kelas() {
        $this->load->view('headfoot/header');
        $data['kelas'] = $this->M_kelas->daftarKelas();
        $this->load->view('daftar/daftar_kelas', $data);
        $this->load->view('headfoot/footer');
    }

    function daftar_news() {
        $this->load->view('headfoot/header');
        $data['kelas'] = $this->M_news->daftarBerita();
        $this->load->view('daftar/daftar_berita', $data);
        $this->load->view('headfoot/footer');
    }

    function daftar_team() {
        $this->load->view('headfoot/header');
        $data['team'] = $this->M_team->daftarTeam();
        $this->load->view('daftar/daftar_team', $data);
        $this->load->view('headfoot/footer');
    }

    function daftar_testimoni() {
        $this->load->view('headfoot/header');
        $data['testimoni'] = $this->M_testimoni->daftarTestimoni();
        $this->load->view('daftar/daftar_testimoni', $data);
        $this->load->view('headfoot/footer');
    }

    function daftar_gallery() {
        $this->load->view('headfoot/header');
        $data['gallery'] = $this->M_gallery->daftarGallery();
        $this->load->view('daftar/daftar_gallery', $data);
        $this->load->view('headfoot/footer');
    }

    function daftar_portofolio() {
        $this->load->view('headfoot/header');
        $data['portofolio'] = $this->M_portofolio->daftarPortofolio();
        $this->load->view('daftar/daftar_portofolio', $data);
        $this->load->view('headfoot/footer');
    }

    function daftar_kategori($params = NULL) {
        $this->load->view('headfoot/header');
        if ($params == 'kelas') {
            $data['content'] = $this->M_kategori->getKategori();
        } else if ($params === 'gallery') {
            $data['content'] = $this->M_kategori->getKategoriGallery();
        } else if ($params === 'portofolio') {
            $data['content'] = $this->M_kategori->getKategoriPortofolio();
        } else {
            die("You don't have any access to see this page");
        }
        $this->load->view('daftar/daftar_kategori', $data);
        $this->load->view('headfoot/footer');
    }

}
