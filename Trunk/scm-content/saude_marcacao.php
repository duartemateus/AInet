<?php 
require_once 'controllers/commons.php'; 
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
$con = mysqli_connect('localhost', 'scml', 'scmladmin','scml_db');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$especialidade = mysqli_query($con,"SELECT * FROM clinical_specialty ORDER BY short_name");
$seguradora = mysqli_query($con,"SELECT * FROM health_insurer ORDER BY short_name");
include_once VIEWS_DIR.'header_open.php';
// INICIO todos os includes e scripts particulares da pagina
// echo "<link rel='stylesheet' href='".STYLES_DIR."slider.css' type='text/css'/>\n";     
// echo "<script type='text/javascript' src='".INCLUDES_DIR."jquery.cycle.all.js'></script>\n";
// echo "<script type='text/javascript' src='".INCLUDES_DIR."jquery.easing.1.3.js'></script>"; 
// echo "<script type='text/javascript' src='".JS_DIR."slider.js'></script>\n";  
// END 
include_once VIEWS_DIR.'header_close.php';
include_once VIEWS_DIR.'top.php';
include_once 'views/saude/saude_marcacao.php';
include_once VIEWS_DIR.'footer.php';