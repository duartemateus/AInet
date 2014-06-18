<?php

class controller_PessoalRegistar {

    const FORM_FIRST = 0;
    const FORM_ERRORS = 1;
    const FORM_OK = 2;

    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 0;
        $vars['secondnavbar'] = 0;
    }

    public function prepare_vars(&$vars) {
        $db = new model_DB();
        if ($db->connected) {

            $fValid = checkPosts($vars);

            extract($_POST);









            $result = mysqli_query($db->conn, "SELECT * FROM clinical_specialty ORDER BY short_name");
            $areas_clinicas = array();
            while ($r = mysqli_fetch_array($result)) {
                $areas_clinicas[$r['id']] = $r;
            }
            $vars['areas_clinicas'] = $areas_clinicas;


            $result = mysqli_query($db->conn, "SELECT d.id, d.name AS doctor_name, d.profile, cs.short_name AS specialty_name, ds.availability,
                                      ds.clinical_specialty_id, p.name AS pser_nome_completo, p.mobile_phone, p.phone, su.photo_url, su.email, su.photo
                                      FROM doctor d, doctor_specialty ds, clinical_specialty cs, person p, scml_user su
                                      WHERE (d.id = ds.doctor_id AND cs.id = ds.clinical_specialty_id AND d.user_id = p.id AND p.id = su.id)");

            $informacao_doutor = array();
            while ($r = mysqli_fetch_array($result)) {
                $informacao_doutor[$r['id']] = $r;
            }
            $vars['informacao_doutor'] = $informacao_doutor;
        }
    }

    public function checkPosts($vars) {
        if (!isset($_POST) || count($_POST) = 0) {
            return self::FORM_FIRST;
        }
        $vars['nome'] = testar_input('nome');
        $vars['email'] = testar_input('email');
        $vars['morada'] = testar_input('morada');
        $vars['cidade'] = testar_input('cidade');
        $vars['nacionalidade'] = testar_input('nacionalidade');
        $vars['bi'] = testar_input('bi');
        $vars['telemovel'] = testar_input('telemovel');
        $vars['fixo'] = testar_input('fixo');
        $vars['sns'] = testar_input('sns');
        $vars['password'] = testar_input('password');
        $vars['contribuinte'] = testar_input('contribuinte');
        $vars['datanascimento'] = testar_input('datanascimento');
        $vars['postal'] = testar_input('postal');
    }

    public function checkSpecialPosts($v_name, $vars) {
        if ($v_name == 'nome') {
            $vars['nome'] = test_input($_POST["nome"]);
            if (count($vars['nome']) < 5) {
                $vars['nomeErr'] = "Tem de conter pelo menos 5 caracteres.";
            }
        } else if ($v_name == 'email') {
            $vars['email'] = test_input($_POST["email"]);
            $vars['email1'] = test_input($_POST["email1"]);
            if (!eregi("/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i",  $vars['email'])) {
                $vars['emailErr'] = "Email necessario";
            } else if ($vars['email'] != $vars['email1']) {
                $vars['emailErr'] = "Os emails não são iguais";
            }
        } else if ($v_name == 'password') {
            $vars['password'] = test_input($_POST["password"]);
            $vars['password1'] = test_input($_POST["password1"]);
            
            
            if (!eregi("/^([0-9a-zA-Z])+$/", $vars['password'])) {
                $passErr = "Password necessaria";
            } elseif ($password != $password1) {
                $passErr = "As passwords não são iguais";
            } else {
                $password = test_input($_POST["password"]);
            }
        }
    }

    function testar_input($v_name, $vars) {
        $data = $_POST[$v_name];
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function get_view(&$vars) {
        return VIEW_DIR . 'pessoal/pessoal_registar.php';
    }

}

$db_handle = mysql_connect($server, $user_name, $pass_word);
$db_found = mysql_select_db($database, $db_handle);
extract($_POST);

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
$contribuinte = testar_input($contribuinte);
$datanascimento = testar_input($datanascimento);
$postal = testar_input($postal);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (count($_POST["nome"]) < 5) {
        $nameErr = "Tem de conter pelo menos 5 caracteres.";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (!eregi("/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i", $email)) {
        $emailErr = "Email necessario";
    } elseif ($email != $email1) {
        $emailErr = "Os emails não são iguais";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (!eregi("/^([0-9a-zA-Z])+$/")) {
        $passErr = "Password necessaria";
    } elseif ($password != $password1) {
        $passErr = "As passwords não são iguais";
    } else {
        $password = test_input($_POST["password"]);
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {


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
}

function testar_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
