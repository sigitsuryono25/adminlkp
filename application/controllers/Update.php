<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Update
 *
 * @author Sigit Suryono
 */
class Update extends CI_Controller {

    //put your code here

    function update_class() {
        $namaKelas = $this->input->post('nama-kelas');
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('konten');


        $config['upload_path'] = './assets/uploads/kelas/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['overwrite'] = true;
        $filename = "";
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $filename = $this->input->post('file-foto');
        } else {
            $filename = str_replace(" ", "_", $_FILES['file']['name']);
        }

        $objectData = array(
            "id_kategori" => $kategori,
            "nama" => $namaKelas,
            "deskripsi" => $deskripsi,
            'foto_kelas' => $filename
        );
        $condition = array('id_kelas' => $this->input->post('id_kelas'));

        $this->M_kelas->editKelas($objectData, $condition);
    }

    function update_news() {
        $judulBerita = $this->input->post('judul');
        $konten = $this->input->post('konten');

        $config['upload_path'] = './assets/uploads/news/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['overwrite'] = true;
        $filename = "";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $filename = $this->input->post('file-foto');
        } else {
            $filename = str_replace(" ", "_", $_FILES['file']['name']);
        }

        $objectData = array(
            "judul_berita" => $judulBerita,
            "konten" => $konten,
            'side_image' => $filename
        );

        $condition = array('id' => $this->input->post('id_berita'));

        $this->M_news->editBerita($objectData, $condition);
    }

    function update_team() {
        $nama = $this->input->post('nama-trainer');
        $posisi = $this->input->post('posisi');
        $konten = $this->input->post('konten');


        $config['upload_path'] = './assets/uploads/trainer/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['overwrite'] = true;
        $filename = "";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $filename = $this->input->post('file-foto');
        } else {
            $filename = str_replace(" ", "_", $_FILES['file']['name']);
        }

        $condition = array('id' => $this->input->post('id'));
        $objectData = array(
            "nama" => $nama,
            "deskripsi" => $konten,
            "posisi" => $posisi,
            'foto' => $filename
        );

        $this->M_team->editTeam($objectData, $condition);
    }

    function update_testimoni() {
        date_default_timezone_set("Asia/Bangkok");
        $nama = $this->input->post('nama-pemberi');
        $konten = $this->input->post('konten');
        $filename = "";

        $config['upload_path'] = './assets/uploads/testimoni/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $filename = $this->input->post('file-foto');
        } else {
            $filename = str_replace(" ", "_", $_FILES['file']['name']);
        }


        $condition = array('id' => $this->input->post('id_testimoni'));
        $objectData = array(
            "nama_pemberi" => $nama,
            "testimoni" => $konten,
            'foto' => $filename
        );

        $this->M_testimoni->editTestimoni($objectData, $condition);
    }

    function update_gallery() {
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('konten');
        $judulKegiatan = $this->input->post('judul-kegiatan');

        $config['upload_path'] = './assets/uploads/gallery/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['overwrite'] = true;
        $filename = "";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $filename = $this->input->post('file-foto');
        } else {
            $filename = str_replace(" ", "_", $_FILES['file']['name']);
        }

        $condition = array('id' => $this->input->post('id_gallery'));
        $objectData = array(
            'nama_file' => $filename,
            'deskripsi' => $deskripsi,
            'kategori' => $kategori,
            'judul' => $judulKegiatan
        );

        $this->M_gallery->editGallery($objectData, $condition);
    }

    function update_kategori() {
        $table = $this->input->post('tujuan-kategori');
        $folder = explode("_", $table);
//        $config['upload_path'] = './assets/uploads/' . $folder[1];
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        $condition = array('id' => $this->input->post('id_kat'));
        if (!$this->upload->do_upload('file')) {
            $objectData = array('nama' => $this->input->post('nama-kategori'));
        } else {
            $objectData = array(
                'nama' => $this->input->post('nama-kategori'),
                'deskripsi' => $this->input->post('kontenTambah'),
                'harga' => str_replace(".", "", $this->input->post('harga')),
                'foto' => str_replace(" ", "_", $_FILES['file']['name'])
            );
        }

        $this->M_kategori->updateKategori($table, $objectData, $condition);
//        print_r($condition);
//        echo $this->input->post('kontenTambah');
    }

    function update_portofolio() {
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('konten');
        $judulKegiatan = $this->input->post('judul-kegiatan');

        $config['upload_path'] = './assets/uploads/portofolio/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['overwrite'] = true;
        $filename = "";

        $this->load->library('upload', $config);
//
        if (!$this->upload->do_upload('file')) {
            $filename = $this->input->post('file-foto');
        } else {
            $filename = str_replace(" ", "_", $_FILES['file']['name']);
        }
        $condition = array('id' => $this->input->post('id_porto'));
        $objectData = array(
            'nama_file' => $filename,
            'deskripsi' => $deskripsi,
            'kategori' => $kategori,
            'judul' => $judulKegiatan
        );

//       echo json_encode($objectData);

        $this->M_portofolio->editPortofolio($objectData, $condition);
    }

}
