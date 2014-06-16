<?php
require_once '../config/commons.php';
$auth = new controller_Auth();
if (!$auth->isAuthenticated()) {
    extract($_POST);
    if (isset($login_email) && isset($login_password)) {
        $auth->authenticate($login_email, $login_password);
    }  
}