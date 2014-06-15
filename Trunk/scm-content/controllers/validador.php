<?php
#extract ($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = testar_input($_POST["first"]);
  $email = testar_input($_POST["email"]);
  $especialidade = testar_input($_POST["especialidade"]);
  $seguradora = testar_input($_POST["seguradora"]);
}
//foreach( $_POST as $stuff ) {
//    echo $stuff.'<br>';
//    testar_input($stuff);
//}
echo $name;

function testar_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}