<?php
//require_once 'controllers/commons.php';
//require_once 'login.php';
$user_name = "scml";
$pass_word = "scmladmin";
$database = "scml_db";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $pass_word);
$db_found = mysql_select_db($database, $db_handle);

extract ($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

}

//$db = new models_DBConnection();
//if ($db->connected) {
////$login = mysqli_query($db->conn,
             $SQL = "INSERT INTO `person`(`id`, `name`, `date_of_birth`, `gender`, `nationality`, `address`, `post_code`, `city`, `email`, `fiscal_id`, `civil_id`, `mobile_phone`, `phone`, `sns`, `member_nr`, `patient_nr`) VALUES ('2','$nome','$datanascimento','$sexo','$nacionalidade','$morada','$postal','$cidade','$email','$contribuinte','$bi','$telemovel','$fixo','$sns','membernr','patientnr')";
//}else{
//    echo "falhou";
//}
//$SQL1 = "INSERT INTO `scml_user`(`id`, `email`,`hashed_password` , `salt`, `role`, `photo`, `photo_url`, `photo_mimetype`, `last_successful_login`, `invalid_login_attempts`, `active`, `created_at`, `updated_at`, `person_id`, `remember_token`) VALUES ('2','crap@gamladsad.pt','$pword','10','1','1','1','1','1','1','0','1','1','2','1')";
$result = mysql_query($SQL);
//$result = mysql_query($SQL1);

function testar_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}