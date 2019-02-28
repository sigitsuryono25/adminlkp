<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Infront
 *
 * @author Sigit Suryono
 */
class Infront extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        if($this->session->has_userdata('nama')){
//            redirect('dash/add_class/!#kelas');
//        }
    }

    function index() {
        $this->load->view('login');
    }

    function process() {
        date_default_timezone_set('Asia/Bangkok');
        $this->load->library('passwordhash');
        $username = $this->input->post('username');
        $plainText = $this->input->post('password');

        $data = $this->M_user->getCredentials($username);
        $hash = $data[0]->password;

        $isMatch = $this->passwordhash->checkHashIsValid($plainText, $hash);

        if ($isMatch) {
            echo '0';
            $sessionData = array('username' => $data[0]->username, 'nama' => $data[0]->nama_lengkap);
            $this->session->set_userdata($sessionData);
            $conditions = array('username' => $username);
            $objectData = array('last_login' => date('Y-m-d H:i:s'));

            $this->M_user->updateLastLogin($conditions, $objectData);
        } else {
            echo '1';
        }
    }

    function off() {
        $this->session->sess_destroy();
        redirect('infront');
    }

}
