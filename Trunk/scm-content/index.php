<?php 
require_once 'controllers/commons.php';
include_once 'login.php';
$title="Santa Casa da Misericórdia de Leiria" ;
$keywords="";
$description=""; 
$body_onload=""; 
$firstnavbar=0;
$secondnavbar=array($firstnavbar,0);
include_once VIEWS_DIR.'header_open.php';
// INICIO todos os includes e scripts particulares da pagina
echo "<link rel='stylesheet' href='".STYLES_DIR."slider.css' type='text/css'/>\n";     
echo "<script type='text/javascript' src='".INCLUDES_DIR."jquery.cycle.all.js'></script>\n";
echo "<script type='text/javascript' src='".INCLUDES_DIR."jquery.easing.1.3.js'></script>"; 
echo "<script type='text/javascript' src='".JS_DIR."slider.js'></script>\n";  
// END 
include_once VIEWS_DIR.'header_close.php';
include_once VIEWS_DIR.'top.php';
include_once 'views/home/index.php';
include_once VIEWS_DIR.'footer.php';