<?php
define('ROOT_DIR', '../');
define('CONTROLLER_DIR', ROOT_DIR . 'controller/');
define('VIEW_DIR', ROOT_DIR . 'view/');
define('MODEL_DIR', ROOT_DIR . 'model/');
define('PUBLIC_DIR', ROOT_DIR . 'public/');

define('IMG_DIR', PUBLIC_DIR . 'img/');
define('JS_DIR', PUBLIC_DIR . 'js/');
define('CSS_DIR', PUBLIC_DIR . 'css/');


spl_autoload_register(function ($class) {
    require_once ROOT_DIR . str_replace('_', '/', $class) . '.php';
}
);
