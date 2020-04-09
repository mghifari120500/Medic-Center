<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        $this->load->library(['auth', 'form_validation']);
    }

    public function index()
    {
        $data = array("name" => "", "email" => "");
        $headerData = array(
            "title" => "Medic-Store | Daftar"
        );

        if ($_POST) {
            $name = test_input($_POST['name']);
            $email = test_input($_POST['email']);
            $password = test_input($_POST['password']);
            $confirm = test_input($_POST['confirm']);
            $data = array(
                "name" => $name,
                "email" => $email,
                "password" => $password
            );
            if (checkName($name) && checkEmail($email) && checkPassword($password, $confirm)) {
                $this->User->add($data);
                return redirect('login');
            } 
        }

        $viewData = array(
            "headerData" => $headerData,
            "viewData" => $data
        );

        // var_dump($viewData);
        return $this->load->view('register', $viewData);
    }
}
