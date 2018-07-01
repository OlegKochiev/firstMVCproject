<?php

session_start();

define("PATH", dirname(dirname(__FILE__)));
define("CONTROLLER_PATH", PATH.'/controllers/');
define("MODEL_PATH", PATH.'/models/');
define("VIEW_PATH", PATH.'/views/');

require_once 'db.php';
require_once 'route.php';

require_once CONTROLLER_PATH.'Controller.php';
require_once MODEL_PATH.'Model.php';
require_once VIEW_PATH.'View.php';



Routing::build_route();
