<?php

class AuthorizationController extends Controller
{
    private $page_template = '/views/auth.tpl.php';

    public function index(){
        $this->page_datas['title'] = "Вход в личный кабинет.";
        $this->view->render($this->page_template, $this->page_datas);
    }
    public function login(){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $auth_status = $this->model->check_user($login, $password);
        if ($auth_status) {
            $this->page_datas['title'] = "Вход в личный кабинет осуществлен!";
        } else {
            $this->page_datas['title'] = "Вход в личный кабинет не разрешен!!!";
        }
        $this->view->render($this->page_template, $this->page_datas);
    }
}