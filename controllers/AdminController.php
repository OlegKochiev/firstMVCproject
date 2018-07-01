<?php
class AdminController extends Controller
{
    private $template = '/views/admin.tpl.php';

    public function index(){
        if ($_SESSION['user']) {
            $page_data['title'] = 'Личный кабинет';
            $page_data['users_count'] = $this->model->get_users_count();
            $page_data['orders_count'] = $this->model->get_orders_count();
            $page_data['products_count'] = $this->model->get_products_count();
            $orders = $this->model->get_orders();
            $page_data['orders'] = $orders;
            $this->view->render($this->template, $page_data);
        } else {
            header("Location: /authorization");
        }
    }
    public function logout(){
        session_destroy();
        header("Location: /");
    }
}