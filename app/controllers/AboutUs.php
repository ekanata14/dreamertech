<?php

class AboutUs extends Controller{
    public function index(){
        $data['title'] = "Dreamer Tech";
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("aboutUs/index");
        $this->view("templates/footer");
    }
}