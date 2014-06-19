<?php

require_once '../config/commons.php';
$vars = array();
require_once './auth.php';
$controller = new controller_SaudeEditarDoutor($vars);
$controller->prepare_vars($vars);
extract($vars);
include VIEW_DIR . 'head.php';
if ($informacao_doutor[$id_doutor] == null) {
    echo "<div id='middle' class='wrapper'>";
    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "A página solicitada não foi encontrada.";
    echo "</div>";
    exit();
}
include $controller->get_view($vars);
include VIEW_DIR . 'foot.php';
