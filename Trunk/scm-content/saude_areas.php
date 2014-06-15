<?php 
require_once 'controllers/commons.php'; 
require_once 'login.php';
// vars
$title="Santa Casa da Misericórdia de Leiria" ;
$keywords="";
$description=""; 
$body_onload=""; 
$firstnavbar=1;
$secondnavbar=array($firstnavbar,1);
$area = 0;
// end

if(isset($_GET) && count($_GET)){
    $area = $_GET['area'];
}
$con = mysqli_connect('localhost', 'scml', 'scmladmin','scml_db');
// Check connection
if (mysqli_connect_errno()) {
    $areas_clinicas = "";
}else{
    $areas_clinicas = mysqli_query($con,"SELECT * FROM clinical_specialty ORDER BY short_name");
}

// LOAD VIEWS
include_once VIEWS_DIR.'header_open.php';
// INICIO todos os includes e scripts particulares da pagina
// echo "<link rel='stylesheet' href='".STYLES_DIR."slider.css' type='text/css'/>\n";     
// echo "<script type='text/javascript' src='".INCLUDES_DIR."jquery.cycle.all.js'></script>\n";
// echo "<script type='text/javascript' src='".INCLUDES_DIR."jquery.easing.1.3.js'></script>"; 
// echo "<script type='text/javascript' src='".JS_DIR."slider.js'></script>\n";
echo "<script type='text/javascript'>\n";
echo "    $(document).ready(function() {\n";
echo "        $('#sidebar a').click(function(e) {\n";
echo "            var allElems = $('#sidebar').children();\n";
echo "            for (var i = 0; i < allElems.length; i++) {\n";
echo "                allElems[i].className = '';\n";
echo "            }\n";
echo "            var id = $(this).attr('href');\n";
echo "            document.getElementById('input_selected_area').value = id;\n";
echo "            document.forms['form_select_area'].submit();\n";
echo "            e.preventDefault();\n";
echo "        });\n";
echo "    });\n";
echo "</script>\n";
// END 
include_once VIEWS_DIR.'header_close.php';
include_once VIEWS_DIR.'top.php';

$my_area_clinica = "";
include_once 'views/saude/saude_areas.php';


include_once VIEWS_DIR.'footer.php';