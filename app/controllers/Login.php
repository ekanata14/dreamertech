<?php

class Login extends Controller{
    public function index(){
        $data = [
            'email' => $_POST['email'],
            'pass' => $_POST['password']
        ];

        if($this->model("User_model")->checkLogin($data) > 0){
            $row = $this->model("User_model")->getDataUserByEmail($data);
            // session_start();
            $_SESSION['user'] = [
                'id' => $row['id'],
                'username' => $row['username'],
                'email' => $row['email'],
                'address' => $row['address'],
                'role' => $row['role']
            ];
            unset($_POST);
            header('Location:' . BASE_URL . '/home');
        } else{
            (new Flasher)->setFlash('failed', 'login', 'danger');
            header('Location:' . BASE_URL . '/user/login');
            exit;
        }
    }
}