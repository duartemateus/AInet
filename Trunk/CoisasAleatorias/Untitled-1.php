<?php
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