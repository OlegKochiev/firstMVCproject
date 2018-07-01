<?php

class AuthorizationController extends Controller
{
    private $page_template = '/views/auth.tpl.php';

    public function index(){
        if ($_SESSION['user']) {
            header("Location: /");
        } else {
            $this->page_datas['title'] = "Вход в личный кабинет.";
            $this->view->render($this->page_template, $this->page_datas);
        }
    }
    public function login(){
        if ($_SESSION['user']) {
            header("Location: /");
        } else {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $user_id = $this->model->get_user_id($login, $password);
            if ($user_id == false) {
                $this->page_datas['title'] = "Вход в личный кабинет не разрешен!!!";
                $this->view->render($this->page_template, $this->page_datas);
            } else {
                $_SESSION['user'] = $user_id;
                header("Location: /");
            }
        }
            
    }
}