<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tools
 *
 * @author Sigit Suryono
 */
class Tools extends CI_Controller{
    //put your code here
    
    function get_kategori($param) {
        $result = $this->M_kategori->getKategoriById($param);
        $response = array();
        foreach ($result as $value) {
            $response= $value;
        }
        
        echo json_encode($response);
    }
}
