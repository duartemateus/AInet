<?php 
require_once '../config/commons.php';
$vars = array();
require_once './login.php';
$home = new controller_Home($vars);
include VIEW_DIR.'home/index.php';
echo $home->get_view();
