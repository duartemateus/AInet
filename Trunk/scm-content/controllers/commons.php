<?php
define ('ROOT_DIR',__DIR__.'../');
define ('CONTROLLERS_DIR','controllers/');
define ('VIEWS_DIR','views/');
define ('MODELS_DIR','models/');

define ('IMGS_DIR','../scm-imagens/');
define ('INCLUDES_DIR','../scm-includes/');
define ('JS_DIR','../scm-javascripts/');
define ('STYLES_DIR','../scm-stylesheets/');
 

spl_autoload_register(
	function ($class){
		require_once ROOT_DIR.str_replace('_','/',$class).'.php';
	}
);
?>