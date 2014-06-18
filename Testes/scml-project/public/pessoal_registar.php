<?php 
require_once '../config/commons.php';
$vars = array();
require_once './auth.php';
$controller = new controller_PessoalRegistar($vars);
$controller->prepare_vars($vars);
extract($vars);
include VIEW_DIR.'head.php';
include $controller->get_view($vars);
include VIEW_DIR.'foot.php';




require_once 'controllers/commons.php';
require_once 'login.php';
// vars
$title="Santa Casa da Misericórdia de Leiria" ;
$keywords="";
$description=""; 
$body_onload=""; 
$firstnavbar=1;
$secondnavbar=array($firstnavbar,3);
$area = 0;
// end

if(isset($_POST) && isset($_POST['area'])){
    $area = $_POST['area'];
}
// Check connection

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
include_once VIEWS_DIR.'header_open.php';
// INICIO todos os includes e scripts particulares da pagina
// echo "<link rel='stylesheet' href='".STYLES_DIR."slider.css' type='text/css'/>\n";     
// echo "<script type='text/javascript' src='".INCLUDES_DIR."jquery.cycle.all.js'></script>\n";
// echo "<script type='text/javascript' src='".INCLUDES_DIR."jquery.easing.1.3.js'></script>"; 
// echo "<script type='text/javascript' src='".JS_DIR."slider.js'></script>\n";  
// END 
include_once VIEWS_DIR.'header_close.php';
include_once VIEWS_DIR.'top.php';
include_once 'views/register_form.php';
include_once VIEWS_DIR.'footer.php';