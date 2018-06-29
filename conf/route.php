<?php

/**
 * Routing:
 * 
 * 
 * 
 */
class Routing
{
    public static function build_route(){
        $controller_name = 'IndexController';
        $model_name = "IndexModel";
        $action = 'index';

        $route = explode('/', $_SERVER['REQUEST_URI']);

        if ($route[1] != '') {
            $controller_name = ucfirst($route[1]."Controller");
            $model_name = ucfirst($route[1]."Model");
        }
        $way_to_controller =  CONTROLLER_PATH . $controller_name . '.php';
        $way_to_model = MODEL_PATH . $model_name . '.php';
        if (file_exists($way_to_controller) && file_exists($way_to_model) ) {
            require_once $way_to_controller;
            require_once $way_to_model;
            if ($route[2] != '' && isset($route[2])) {
                $action = $route[2];
            }
            $controller = new $controller_name($model_name);
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                self::error_page('Not found action');
            }
        } else {
            self::error_page('Not found controller or model');
        }
    }

    public static function error_page($str){
        echo $str;
    }


}