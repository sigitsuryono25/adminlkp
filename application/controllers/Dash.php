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
class Dash extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('nama')) {
			redirect('infront');
		}
	}

	function index() {
		$this->load->view('headfoot/header');
		$this->load->view('headfoot/footer');
	}

	function add_class() {
		$this->load->view('headfoot/header');
		$data['kategori'] = $this->M_kategori->getKategori();
		$data['title'] = NULL;
		$this->load->view('add_class', $data);
		$this->load->view('headfoot/footer');
	}

	function add_news_blog() {
		$this->load->view('headfoot/header');
		$this->load->view('add_news');
		$this->load->view('headfoot/footer');
	}

	function add_testimoni() {
		$this->load->view('headfoot/header');
		$this->load->view('add_testimoni');
		$this->load->view('headfoot/footer');
	}

	function add_team() {
		$this->load->view('headfoot/header');
		$data['posisi'] = $this->M_kategori->getPosisi();
		$this->load->view('add_team', $data);
		$this->load->view('headfoot/footer');
	}

	function add_gallery() {
		$this->load->view('headfoot/header');
		$data['kategori'] = $this->M_kategori->getKategoriGallery();
		$this->load->view('add_gallery', $data);
		$this->load->view('headfoot/footer');
	}

	function add_portofolio() {
		$this->load->view('headfoot/header');
		$data['kategori'] = $this->M_kategori->getKategoriPortofolio();
		$this->load->view('add_portofolio', $data);
		$this->load->view('headfoot/footer');
	}

	function add_side_bar() {
		$this->load->view('headfoot/header');
		$data['kelas'] = $this->M_kelas->daftarKelas();
		$this->load->view('add_side_bar', $data);
		$this->load->view('headfoot/footer');
	}

	function add_profile() {
		$this->load->view('headfoot/header');
		$this->load->view('add_profile');
		$this->load->view('headfoot/footer');
	}

	/* -------------------- */
	/* PROSES INSERT DATA */
	/* -------------------- */

	function add_kelas_proc() {
		$namaKelas = $this->input->post('nama-kelas');
		$harga = str_replace(".", "", $this->input->post('harga-kelas'));
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('konten');

		$config['upload_path'] = './assets/uploads/kelas/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1000000';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {

		} else {

		}

		$objectData = array(
			"id_kategori" => $kategori,
			"nama" => $namaKelas,
			"deskripsi" => $deskripsi,
			"harga" => $harga,
			'foto_kelas' => $_FILES['file']['name'],
			'judul_seo' => strtolower(str_replace(" ", "-", $namaKelas)),
		);

		$this->M_kelas->insertKelas($objectData);
	}

	function add_news_blog_proc() {
		$judulBerita = $this->input->post('judul');
		$konten = $this->input->post('konten');

		$config['upload_path'] = './assets/uploads/news/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1000000';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {

		} else {

		}

		$objectData = array(
			"judul_berita" => $judulBerita,
			"konten" => $konten,
			'side_image' => str_replace(" ", "_", $_FILES['file']['name']),
		);

		$this->M_news->insertBerita($objectData);
	}

	function add_testimoni_proc() {
		date_default_timezone_set("Asia/Bangkok");
		$nama = $this->input->post('nama-pemberi');
		$konten = $this->input->post('konten');

		$config['upload_path'] = './assets/uploads/testimoni/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1000000';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {

		} else {

		}

		$objectData = array(
			"nama_pemberi" => $nama,
			"testimoni" => $konten,
			'foto' => str_replace(" ", "_", $_FILES['file']['name']),
		);

		$this->M_testimoni->insertTestimoni($objectData);
	}

	function add_team_proc() {
		$nama = $this->input->post('nama-trainer');
		$posisi = $this->input->post('posisi');
		$konten = $this->input->post('konten');

		$config['upload_path'] = './assets/uploads/trainer/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1000000';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {

		} else {

		}

		$objectData = array(
			"nama" => $nama,
			"deskripsi" => $konten,
			"posisi" => $posisi,
			'foto' => str_replace(" ", "_", $_FILES['file']['name']),
		);

		$this->M_team->insertTeam($objectData);
	}

	function add_category_proc() {
		$table = $this->input->post('tujuan-kategori');
		$folder = explode("_", $table);
		$config['upload_path'] = './assets/uploads/' . $folder[1];
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1000000';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {
			$objectData = array('nama' => $this->input->post('nama-kategori'));
		} else {
			$objectData = array(
				'nama' => $this->input->post('nama-kategori'),
				'deskripsi' => $this->input->post('kontenTambah'),
				'harga' => str_replace(".", "", $this->input->post('harga')),
				'foto' => str_replace(" ", "_", $_FILES['file']['name']),
			);
		}

		$this->M_kategori->tambahKategori($table, $objectData);
	}

	function add_gallery_proc() {
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('konten');
		$judulKegiatan = $this->input->post('judul-kegiatan');

		$config['upload_path'] = './assets/uploads/gallery/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1000000';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {

		} else {

		}

		$objectData = array(
			'nama_file' => str_replace(" ", "_", $_FILES['file']['name']),
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'judul' => $judulKegiatan,
		);

		$this->M_gallery->insertGallery($objectData);
	}

	function add_portofolio_proc() {
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('konten');
		$judulKegiatan = $this->input->post('judul-kegiatan');

		$config['upload_path'] = './assets/uploads/portofolio/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = '1000000';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);
//
		if (!$this->upload->do_upload('file')) {

		} else {

		}
//
		$objectData = array(
			'nama_file' => str_replace(" ", "_", $_FILES['file']['name']),
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'judul' => $judulKegiatan,
		);

//       echo json_encode($objectData);

		$this->M_portofolio->insertPortofolio($objectData);
	}

	function add_posisi_proc() {
		$objectData = array('nama_posisi' => $this->input->post('nama-posisi'));
		$this->M_kategori->insertPosisi($objectData);
	}

	function add_side_bar_proc() {
		$idKelas = $this->input->post('kelas-tujuan');
		$jumlahKonten = $this->M_sidebar->getCountContent($idKelas);
		if ($jumlahKonten->jumlah > 0) {
			$objectData = array('content' => $this->input->post('konten'), 'id_kelas' => $idKelas);
			$this->M_sidebar->updateSideBar($objectData);
		} else {
			$objectData = array('content' => $this->input->post('konten'), 'id_kelas' => $idKelas);
			$this->M_sidebar->insertSideBar($objectData);
		}
	}

	function add_profile_proc() {
		$kontentProfile = $this->input->post('konten');

		$this->M_profile->insertProfile('profile', array('content' => $kontentProfile));
	}

}
