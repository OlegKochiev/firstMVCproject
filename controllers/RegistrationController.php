<?php

class RegistrationController extends Controller
{
    protected $page_template = '/views/reg.tpl.php';
   
    public function index(){
        if ($_SESSION['user']) {
            header("Location: /");
        } else {
            $this->page_data['title'] = 'Регистрация нового пользователя';
            $this->view->render($this->page_template, $this->page_data);
        }

    }
    public function add_user(){
        if ($_SESSION['user']) {
            header("Location: /");
        } else {
            $user_info['login'] = $_POST['login'];
            $user_info['email'] = $_POST['email'];
            $user_info['password'] = $_POST['password'];
            $success = $this->model->add_user($user_info);
        }
    }

}