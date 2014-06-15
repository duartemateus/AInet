<?php
require_once 'controller/commons.php';
$auth = new controller_Auth();
if(!$auth->isAuthenticated()){
	if(isset($_POST) && count($_POST) && isset($_POST[login_email]) && isset($_POST[login_password])){
        extract($_POST);
        $auth->authenticate($login_email, $login_password);
    }
}