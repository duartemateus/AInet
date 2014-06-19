<?php

require_once '../config/commons.php';
extract($_POST);
session_start();
$auth = new controller_Auth();
if (!$auth->isAuthenticated() && isset($login_email) && isset($login_password)) {
    $auth->authenticate($login_email, $login_password);
}
if ($auth->isAuthenticated() && isset($logout)) {
    $auth->logOut();
}
if ($auth->isAuthenticated()) {
    $user = $auth->getUser();
}
