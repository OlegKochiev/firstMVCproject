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

        $route = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        //var_dump($route);



        $i = count($route) - 1;
        while ($i > 0) {
            if ($route[$i] != '') {
                if (is_file(CONTROLLER_PATH . ucfirst($route[$i]) . 'Controller.php') || !empty($_GET)) {
                    $controller_name = ucfirst($route[$i]."Controller");
                    $model_name = ucfirst($route[$i]."Model");
                    break;
                } else {
                    $action = $route[$i];
                }
            }
            $i--;
        }

        require_once CONTROLLER_PATH . $controller_name . '.php';
        require_once MODEL_PATH . $model_name . '.php';


        $controller = new $controller_name($model_name);
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            self::error_page('Not found action');
        }

    }

    public static function error_page($str){
        echo $str;
    }


}