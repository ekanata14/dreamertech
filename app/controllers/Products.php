<?php

class Products extends Controller{
    public function index(){
        session_start();
        $data['title'] = 'Dreamer Tech';
        $data['products'] = $this->model("Products_model")->getAllCpu();
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("home/index");
        $this->view("products/index", $data);
        $this->view("templates/footer");
    }

    public function gpu(){
        session_start();
        $data['title'] = 'Dreamer Tech';
        $data['products'] = $this->model("Products_model")->getAllGpu();
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("home/index");
        $this->view("products/gpu", $data);
        $this->view("templates/footer");
    }

    public function detail($unikey){
        session_start();
        $data['title'] = "Dreamer Tech";
        $data['product'] = $this->model("Products_model")->getProductByUnikey($unikey);
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("products/detail", $data);
        $this->view("templates/footer");
    }
}