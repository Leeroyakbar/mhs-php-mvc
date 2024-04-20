<?php

class Mahasiswa_model
{
    private $dbh;
    private $stmt;


    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=mvc';
        $user = 'root';
        $pass = '';
        try {
            $this->dbh = new PDO($dsn, $user, $pass);
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}