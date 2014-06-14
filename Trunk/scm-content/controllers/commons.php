<?php
define ('ROOT_DIR',__DIR__.'/../');
define ('CONTROLLERS_DIR',ROOT_DIR.'controllers/');
define ('VIEWS_DIR',ROOT_DIR.'views/');
define ('MODELS_DIR',ROOT_DIR.'models/');

define ('IMGS_DIR',ROOT_DIR.'../scm_imagens/');
define ('INCLUDES_DIR',ROOT_DIR.'../scm_includes/');
define ('JS_DIR',ROOT_DIR.'../scm_javascripts/');
define ('STYLES_DIR',ROOT_DIR.'../scm_stylesheets/');
 

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});
?>