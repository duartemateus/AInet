<?php
require_once 'controllers/commons.php';

$uname = "marco@mail.pt";
$pword = "marco";

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

$user_name = "root";
$pass_word = "";
$database = "scml_db";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $pass_word);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
    echo "raistepartam";
}
$SQL = "SELECT * FROM scml_user WHERE email = $uname";
$result = mysql_query($SQL);
$num_rows = mysql_num_rows($result);

if ($num_rows > 0) {

$errorMessage = "Username already taken";

} 
else {
$SQL = "INSERT INTO scml_user (email, hashed_password) VALUES ($uname, $pword)";

$result = mysql_query($SQL);

mysql_close($db_handle);
}
session_start();
$_SESSION['login'] = "1";