<?php

class Logout extends Controller{
    public function index(){
        session_start();
        session_destroy();
        header("Location:" . BASE_URL . "/user/login");
    }
}