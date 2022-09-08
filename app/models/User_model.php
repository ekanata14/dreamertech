<?php

class User_model extends Controller{
    private $table = 'users';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();  
    }

    public function getDataUserByEmail($data){
        $this->db->query("SELECT * FROM $this->table WHERE email = :email");
        $this->db->bind('email', $data['email']);
        return $this->db->single();
    }

    public function getUserById($id){
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function checkLogin($data){
        $this->db->query("SELECT * FROM $this->table WHERE email = :email AND password = :pass");
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['pass']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function addUser($data){
        $query = "INSERT INTO $this->table VALUES(null, :username, :email, :pass, :addresss, 'user')";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['pass']);
        $this->db->bind('addresss', $data['address']);   
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editUser($data){
        $query = "UPDATE $this->table SET 
            id = :id,
            username = :username,
            email = :email,
            password = :pass,
            address = :addresss,
            role = :role
            WHERE id = :id
            ";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['pass']);
        $this->db->bind('addresss', $data['address']);
        $this->db->bind('role', $data['role']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function delete($id){
        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}