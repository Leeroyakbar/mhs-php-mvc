<?php

class Mahasiswa_model
{
    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getById($id){
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function add($data){
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :nama, :nim, :prodi, :email)
                ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('email', $data['email']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}