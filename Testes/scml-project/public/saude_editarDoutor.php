<?php

require_once '../config/commons.php';
$vars = array();
require_once './auth.php';
$controller = new controller_SaudeEditarDoutor($vars);
$controller->prepare_vars($vars);
extract($vars);
include VIEW_DIR . 'head.php';

if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] <= 1 || $_SESSION['user_role'] == 3) && ($user['id'] == $informacao_doutor[$id_doutor]['u_id'] || $user['id'] == 1)) {
    include $controller->get_view($vars);
    include VIEW_DIR . 'foot.php';
} else if ($informacao_doutor[$id_doutor] == null) {
    echo "<div id='middle' class='wrapper'>";
    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "A página solicitada não foi encontrada.";
    echo "</div>";
    exit();
} else {
    echo "<div id='middle' class='wrapper'>";
    header('HTTP/1.0 401 Unauthorized');
    echo "<h1>401 Unauthorized</h1>";
    echo "Não tem permissões para aceder a esta página.";
    echo "</div>";
    exit();
}
