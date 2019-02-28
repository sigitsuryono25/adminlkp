<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kelas
 *
 * @author Sigit Suryono
 */
class Kelas extends CI_Controller {

    //put your code here

    function detail_kelas($param) {
        $this->load->view('headfoot/header');
        $data['detail'] = $this->M_kelas->daftarKelasBy($param);
        $this->load->view('static_page', $data);
        $this->load->view('headfoot/footer');
    }

}
