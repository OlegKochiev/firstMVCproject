<?php

class View
{
    public function render($template, $page_data){
        require_once PATH . $template;
    }
}