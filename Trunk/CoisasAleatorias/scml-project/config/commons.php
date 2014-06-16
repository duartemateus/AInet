<?php

define('ROOT_DIR', __DIR__ . '..\\');
define('CONTROLLER_DIR', ROOT_DIR . 'controller\\');
define('VIEW_DIR', ROOT_DIR . 'view\\');
define('MODEL_DIR', ROOT_DIR . 'model\\');
define('PUBLIC_DIR', ROOT_DIR . 'public\\');

define('IMG_DIR', PUBLIC_DIR . 'img\\');
define('JS_DIR', PUBLIC_DIR . 'scm-javascripts\\');
define('CSS_DIR', PUBLIC_DIR . 'scm-stylesheets\\');


spl_autoload_register(function ($class) {
    require_once ROOT_DIR . str_replace('_', '\\', $class) . '.php';
}
);
?>