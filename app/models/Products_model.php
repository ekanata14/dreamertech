<?php

class Products_model extends Controller{
    private $table = 'products';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllCpu(){
        $query = "SELECT * FROM $this->table WHERE `product-type` = 'cpu'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllGpu(){
        $query = "SELECT * FROM $this->table WHERE `product-type` = 'gpu'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getProductByUnikey($unikey){
        $query = "SELECT * FROM $this->table WHERE `product-unikey` = :unikey";
        $this->db->query($query);
        $this->db->bind("unikey", $unikey);
        $this->db->execute();
        return $this->db->single();
    }
}