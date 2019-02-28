<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Setting
 *
 * @author Sigit Suryono
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function settings() {
        $this->load->view('headfoot/header');
        $data['credentials'] = $this->M_user->getDaftarCredentials();
        $this->load->view('settings_master', $data);
        $this->load->view('headfoot/footer');
    }

    public function add_user() {
        $this->load->library('passwordhash');
        
        $username = $this->input->post('username');
        $password = $this->input->post('passwords');
        $namaLengkap = $this->input->post('nama-lengkap');

        $hash = $this->passwordhash->plainToHash($password);

        $objectData = array(
            'username' => $username,
            'nama_lengkap' => $namaLengkap,
            'update_by' => $this->session->userdata('username'),
            'password' => $hash
        );
        
//        print_r($objectData);

        $this->M_user->insertCredentials($objectData);
    }

}
