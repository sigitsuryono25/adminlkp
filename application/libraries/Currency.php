<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_currency
 *
 * @author Sigit Suryono
 */
class Currency {
    function currencyRP($string){
        $hasil_rupiah = "Rp " . number_format($string,0,'','.');
	return $hasil_rupiah;
    }
}
