<?php
class AdminController extends Controller
{
    private $template = '/views/admin.tpl.php';

    public function index(){
        $page_data['title'] = 'Личный кабинет';
        $page_data['users_count'] = $this->model->get_users_count();
        $page_data['orders_count'] = $this->model->get_orders_count();
        $page_data['products_count'] = $this->model->get_products_count();
        $this->view->render($this->template, $page_data);
    }
}