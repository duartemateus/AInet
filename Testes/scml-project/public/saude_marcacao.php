<?php 
require_once '../config/commons.php';
$vars = array();
require_once './auth.php';
$controller = new controller_SaudeMarcacao($vars);
$controller->prepare_vars($vars);
extract($vars);
include VIEW_DIR.'head.php';
include $controller->get_view($vars);
include VIEW_DIR.'foot.php';