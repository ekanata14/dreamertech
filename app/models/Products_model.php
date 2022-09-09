<?php

class Products_model extends Controller{
    private $table = 'products';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllProducts(){
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getAllCpu(){
        $query = "SELECT * FROM $this->table WHERE `type` = 'cpu'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllGpu(){
        $query = "SELECT * FROM $this->table WHERE `type` = 'gpu'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllStorage(){
        $query = "SELECT * FROM $this->table WHERE `type` = 'storage'";
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

    public function addProduct($data){
        // $randomKey = md5(time() . mt_rand(1,1000000));
        $query = "INSERT INTO $this->table VALUES(null, :productUnikey, :productTitle, :productDesc, :productImg, :productType)";
        $this->db->query($query);
        $this->db->bind('productUnikey', $data['productUnikey']);
        $this->db->bind('productTitle', $data['productTitle']);
        $this->db->bind('productDesc', $data['productDesc']);
        $this->db->bind('productImg', $data['productImg']);
        $this->db->bind('productType', $data['productType']);
        // $this->db->bind('price', $data['productPrice']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editProduct($data){
        $query = "UPDATE $this->table SET
            id = :id,
            `product-title` = :productTitle,
            `product-unikey` = :productUnikey,
            `product-desc` = :productDesc,
            `product-img` = :productImg,
            `product-type` = :productType
            WHERE `product-unikey` = :productUnikey 
        ";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('productTitle', $data['productTitle']);
        $this->db->bind('productUnikey', $data['productUnikey']);
        $this->db->bind('productDesc', $data['productDesc']);
        $this->db->bind('productImg', $data['productImg']);
        $this->db->bind('productType', $data['productType']);
        $this->db->execute();
    }

    public function deleteProduct($id){
        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function searchProduct(){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM $this->table WHERE `product-title` LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getProductByType(){
        $type = $_POST['type'];
        if($type == "All"){
            $query = "SELECT * FROM $this->table";
        } else{
            $query = "SELECT * FROM $this->table WHERE `type` = :type";
        }
        $this->db->query($query);
        $this->db->bind('type', $type);
        $this->db->execute();
        return $this->db->resultSet();
    }
}
