<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db1connection
 *
 * @author jemanesh
 */
class db1connection {
    //put your code here
    private $conn;
    function __construct() {
       
    }
    function connect(){
        $host='localhost';
        $user='root';
        $pass='';
        $dbname='phpclass';
        $this->conn =new mysqli($host,$user,$pass,$dbname);
        return $this->conn;
    }
}

