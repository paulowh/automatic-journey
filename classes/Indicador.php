<?php

class Indicador
{
    public $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host={$_ENV['HOST']}; dbname={$_ENV['DATABASE']}", $_ENV['USER'], $_ENV['PASSWORD']);
    }

    function consultarIndicadorByUc($id)
    {

        $query = 'SELECT * FROM tb_indicador WHERE id_uc = ' . $id;
        return $this->conn->query($query)->fetchAll();
    }
}
