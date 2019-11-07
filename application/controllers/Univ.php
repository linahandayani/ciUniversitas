<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Univ
 *
 * @author Febriani R
 */
class Univ extends CI_Controller {

    function login_api() {
        //variabel, kolom
        //y
        $username= $this->input->get('nama');
        $pswd= $this->input->get('password');
        
        $this->load->model('Univ_m', NULL);
        $data['data']= array();
        //variabel
        $rest= $this->Univ_m->login($username, $pswd)->result();
        //variabel, kolom
        foreach ($rest as $value){
            $json = array();
            $json['username']= $value->nama;
            $json['pswd']= $value->password;
            array_push($data['data'], $json);
        }
        print json_encode($data);
    }

}
