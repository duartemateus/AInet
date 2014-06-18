<?php
if ($auth->isAuthenticated()) {
    $auth->logOut();
}
header('Location:index.php');
exit;