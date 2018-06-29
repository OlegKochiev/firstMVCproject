<?php

class Controller
{
    public $model;
    public $view;
    protected $page_data = [];
    public function __construct($model_name){
        $this->view = new View();
        $this->model = new $model_name();
    }
}