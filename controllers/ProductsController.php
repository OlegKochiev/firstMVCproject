<?php

class ProductsController extends Controller
{
    private $template = '/views/products.tpl.php';
    public function index(){
        $this->page_data['title'] = 'Товары';
        $this->view->render($this->template, $this->page_data);
    }
}