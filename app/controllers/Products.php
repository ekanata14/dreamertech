<?php

class Products extends Controller{
    public function index(){
        // session_start();
        $data['title'] = 'Dreamer Tech';
        $data['products'] = $this->model("Products_model")->getAllCpu();
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("home/index");
        $this->view("products/index", $data);
        $this->view("templates/footer");
    }

    public function gpu(){
        // session_start();
        $data['title'] = 'Dreamer Tech';
        $data['products'] = $this->model("Products_model")->getAllGpu();
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("home/index");
        $this->view("products/gpu", $data);
        $this->view("templates/footer");
    }

    public function storage(){
        // session_start();
        $data['title'] = "Dreamer Tech";
        $data['products'] = $this->model("Products_model")->getAllStorage();
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("home/index");
        $this->view("products/storage", $data);
        $this->view("templates/footer");
    }

    public function productData(){
        // session_start();
        $data['title'] = "Dreamer Tech Admin";
        $data['products'] = $this->model("Products_model")->getAllProducts();
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("products/datas", $data);
        $this->view("templates/footer");
    }

    public function detail($unikey){
        // session_start();
        $data['title'] = "Dreamer Tech";
        $data['product'] = $this->model("Products_model")->getProductByUnikey($unikey);
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("products/detail", $data);
        $this->view("templates/footer");
    }

    public function edit($unikey){
        $data['title'] = "Dreamer Tech Admin";
        $data['product'] = $this->model("Products_model")->getProductByUnikey($unikey);
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("products/edit", $data);
        $this->view("templates/footer");
    }
    
    public function addProduct(){
        // session_start();
        $data['title'] = "Dreamer Tech Admin";
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("products/add");
        $this->view("templates/footer");
    }

    public function tambahProduct(){
        if($this->model("Products_model")->addProduct($_POST) > 0){
            (new Flasher)->setFlash('succeed', 'added', 'success');
            header("Location:" . BASE_URL . "/products/productData");
        } else{
            (new Flasher)->setFlash('failed', 'added', 'danger');
            header("Location:" . BASE_URL . "/products/productData");
        }
    }

    public function editProduct(){
        if($this->model("Products_model")->editProduct($_POST) > 0){
            (new Flasher)->setFlash('succeed', 'edit', 'success');
            header("Location:" . BASE_URL . "products/productData");
        } else{
            (new Flasher)->setFlash('failed', 'edit', 'danger');
            header("Location:" . BASE_URL . "products/productData");
        }
    }

    public function deleteProduct($id){
        if($this->model("Products_model")->deleteProduct($id) > 0){
            (new Flasher)->setFlash('succeed', 'deleted', 'success');
            header("Location:" . BASE_URL . "/products/productData");
        } else{
            (new Flasher)->setFlash('failed', 'delete', 'danger');
            header("Location:" . BASE_URL . "/products/productData");
        }
    }

    public function searchProduct(){
        $data['title'] = "Dreamer Tech Admin";
        $data['products'] = $this->model("Products_model")->searchProduct($_POST);
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("products/datas", $data);
        $this->view("templates/footer");
    }

    public function productType(){
        $data['title'] = "Dreamer Tech Admin";
        $data['products'] = $this->model("Products_model")->getProductByType($_POST);
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("products/datas", $data);
        $this->view("templates/footer");
    }
}