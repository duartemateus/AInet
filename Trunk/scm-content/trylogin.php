<?php
require_once 'controllers/commons.php';

$uname = "marco@mail.pt";
$pword = crypt("marco");

$uname = htmlspecialchars($uname);
$pword = htmlspecialchars($pword);

$uLength = strlen($uname);
$pLength = strlen($pword);

if ($uLength >= 10 && $uLength <= 20) {

$errorMessage = "";

}
else {

$errorMessage = $errorMessage . "Username must be between 10 and 20 characters" . "<BR>";

}

if ($pLength >= 8 && $pLength <= 16) {

$errorMessage = "";

}
else {

$errorMessage = $errorMessage . "Password must be between 8 and 16 characters" . "<BR>";

}

$user_name = "scml";
$pass_word = "scmladmin";
$database = "scml_db";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $pass_word);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
    echo "raistepartam";
}
$SQL = "SELECT * FROM scml_user WHERE email = 'marco@mail.pt'";
$result = mysql_query($SQL);
$num_rows = mysql_num_rows($result);
echo "mysql_num_rows($result)";
$row = mysql_fetch_row($result);
$row = $row[2];
if (password_verify("marco", $row)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
if ($num_rows > 0) {
    
    $errorMessage = "Username already taken";
//    echo crypt("marco")"\n";
    echo "yousuck";
} 
else {
    echo "yousuck1";
    $rape = password_hash("marco", PASSWORD_DEFAULT)."\n";
$SQL = "INSERT INTO `person`(`id`, `name`, `date_of_birth`, `gender`, `nationality`, `address`, `post_code`, `city`, `email`, `fiscal_id`, `civil_id`, `mobile_phone`, `phone`, `sns`, `member_nr`, `patient_nr`) VALUES ('2','Crl','','gay','ali','aqui','12313','crap','marc4@gaymail.com','dsad','dsad','asda','dasd','asdad','asdas','adsa')";
    
$SQL1 = "INSERT INTO `scml_user`(`id`, `email`, `hashed_password`, `salt`, `role`, `photo`, `photo_url`, `photo_mimetype`, `last_successful_login`, `invalid_login_attempts`, `active`, `created_at`, `updated_at`, `person_id`, `remember_token`) VALUES ('2','crap@gamladsad.pt','$rape','10','1','1','1','1','1','1','0','1','1','2','1')";
$result = mysql_query($SQL);
$result = mysql_query($SQL1);
    
    

    
    
    if(!mysql_query($SQL, $db_handle)){
        echo "fodeu-se $SQL";
    }
    mysql_close($db_handle);
}
session_start();
$_SESSION['login'] = "2";