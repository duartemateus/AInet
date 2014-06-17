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

$mail = testar_input($email);
$nome = testar_input($nome);
$morada = testar_input($morada);
$cidade = testar_input($cidade);
$nacionalidade = testar_input($nacionalidade);
$bi = testar_input($bi);
$telemovel = testar_input($telemovel);
$fixo = testar_input($fixo);
$sns = testar_input($sns);
$password = testar_input($password);
$contribuinte =testar_input($contribuinte);
$datanascimento = testar_input($datanascimento);
$postal = testar_input($posta);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (count($_POST["nome"]) < 5) {
    $nameErr = "Tem de conter pelo menos 5 caracteres.";
  } else {
    $name = test_input($_POST["name"]);
  }

    if(!eregi("/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i", $email)){
    $emailErr = "Email necessario";
  } elseif($email != $email1){
      $emailErr = "Os emails não são iguais";
  }else{
      $email = test_input($_POST["email"]);
  }

    if (!eregi("/^([0-9a-zA-Z])+$/")) {
    $emailErr = "Password necessaria";
  } elseif($password != $password1){
      $emailErr = "As passwords não são iguais";
  }else{
      $email = test_input($_POST["password"]);
  }
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

}
$pass = password_hash($password, PASSWORD_DEFAULT);
             $SQL = "INSERT INTO `person`(`id`, `name`, `date_of_birth`, `gender`, `nationality`, `address`, `post_code`, `city`, `email`, `fiscal_id`, `civil_id`, `mobile_phone`, `phone`, `sns`, `member_nr`, `patient_nr`) VALUES ('','$nome','$datanascimento','$sexo','$nacionalidade','$morada','$postal','$cidade','$email','$contribuinte','$bi','$telemovel','$fixo','$sns','','')";
             $result = mysql_query($SQL);
				$IDQ = "SELECT * FROM person WHERE email = '$email'";
				$result = mysql_query($IDQ);
				$row = mysql_fetch_row($result);
				$id = $row[0];
				echo $id;
				echo $pass;
				echo $email;
$SQL1 = "INSERT INTO `scml_user`(`id`, `email`,`hashed_password` , `salt`, `role`, `photo`, `photo_url`, `photo_mimetype`, `last_successful_login`, `invalid_login_attempts`, `active`, `created_at`, `updated_at`, `person_id`, `remember_token`) VALUES ('$id','$email','$pass','10','4','0','0','0','0','0','0','','','$id','')";

$result = mysql_query($SQL1);

function testar_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
