<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Univ_m
 *
 * @author Febriani R
 */
class Univ_m extends CI_Model {

    function login($username, $pswd) {
        $query = $this->db->query
                ("select * from tb_karyawan where nama= '$username' and password='$pswd'");
        return $query;
    }

}
