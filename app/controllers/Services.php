<?php

class Services extends Controller{
    public function index(){
        $data['title'] = "Dreamer Tech";
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("home/index");
        $this->view("services/index");
        $this->view("templates/footer");
    }
}