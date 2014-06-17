8<?php
$password = mcrypt('retarda');
//echo $password;
    if (mcrypt('retarda', $password) == $password)
{
echo "you all suck";
}

$hash = password_hash('marco', PASSWORD_DEFAULT);
   echo $hash;
if (password_verify('marco', $hash)){
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

$options = [
    'cost' => 10,
];

$hash = password_hash('marco', PASSWORD_BCRYPT,$options);
  echo $hash;
if (password_verify('marco', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (count($_POST["nome"]) < 5) {
    $nameErr = "Tem de conter pelo menos 5 caracteres.";
  } else {
    $name = test_input($_POST["name"]);
  }

    if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    $emailErr = "Email necessario";
  } elseif($email != $email1){
      $emailErr = "Os emails não são iguais";
  }else{
      $email = test_input($_POST["email"]);
  }

    if (empty($_POST["password"])) {
    $emailErr = "Password necessaria";
  } elseif($password != $password1){
      $emailErr = "As passwords não são iguais";
  }else{
      $email = test_input($_POST["password"]);
  }
}

    