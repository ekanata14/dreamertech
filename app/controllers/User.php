<?php

class User extends Controller{
    public function index(){
        session_start();
        $data['title'] = "Dreamer Tech";
        $this->view("templates/header", $data);
        $this->view("user/index");
        $this->view("templates/footer");
    }
    
    public function regis(){
        $data['title'] = "Dreamer Tech";
        $this->view("templates/header", $data);
        $this->view("user/register");
        $this->view("templates/footer");
    }

    public function regisUser(){
        if($this->model("User_model")->addUser($_POST) > 0){
            header('Location:' . BASE_URL . '/home');
        } else{
            echo var_dump($_POST);
        }
    }

    public function userData(){
        session_start();
        $data['title'] = "Dreamer Tech Admin";
        $data['users'] = $this->model("User_model")->getAllUsers();
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("user/datas", $data);
        $this->view("templates/footer");
    }
    
    public function detail($id){
        session_start();
        $data['title'] = "Dreamer Tech Admin";
        $data['user'] = $this->model("User_model")->getUserById($id);
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("user/data", $data);
        $this->view("templates/footer");
    }

    public function add(){
        session_start();
        $data['title'] = "Dreamer Tech Admin";
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("user/add");
        $this->view("templates/footer");
    }

    public function tambahUser(){
        if($this->model("User_model")->addUser($_POST) > 0){
            header('Location:' . BASE_URL . '/user/userData');
        } else{
            echo var_dump($_POST);
        }
    }
}