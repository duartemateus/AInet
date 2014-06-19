<?php 
require_once '../config/commons.php';
$vars = array();
require_once './auth.php';
if($auth->isAuthenticated()){
    include VIEW_DIR.'utils/goback.php';
    exit;
}
$controller = new controller_PessoalRegistar($vars);
if($controller->prepare_vars($vars)){
    include VIEW_DIR.'utils/goback.php';
    exit;
}
extract($vars);
$person = $pessoa[0];
include VIEW_DIR.'head.php';
include $controller->get_view($vars);
include VIEW_DIR.'foot.php';