<?php

class Home extends Controller{
    public function index(){
        session_start();
        $data['title'] = 'Dreamer Tech';
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("home/index");
        $this->view("templates/footer");
    }
}