<?php

class Unidade{
    public $conn;

    public function __construct() {
        $this->conn = new PDO("mysql:host={$_ENV['HOST']}; dbname={$_ENV['DATABASE']}", $_ENV['USER'], $_ENV['PASSWORD']);
    }
    
    function consultaUc(){
        
        return $this->conn->query('SELECT * FROM tb_uc')->fetchAll();
    }
}