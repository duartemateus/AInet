<?php
require_once 'controllers/commons.php';
$auth = new controllers_Auth();
if(!$auth->isAuthenticated()){
	if(isset($_POST) && count($_POST) && isset($_POST[login_email]) && isset($_POST[login_password])){
        extract($_POST);
        $auth->authenticate($login_email, $login_password);
    }
}