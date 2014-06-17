<?php 
require_once '../config/commons.php';
$vars = array();
require_once './login.php';
$home = new controller_Home($vars);
extract($vars);
include VIEW_DIR.'head.php';
include $home->get_view($vars);
include VIEW_DIR.'foot.php';