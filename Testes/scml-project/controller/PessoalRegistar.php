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
        switch ($this->checkPosts($vars)) {
            case self::FORM_ERRORS:
                return false;
            case self::FORM_FIRST:
                $this->checkGets($vars);
                return false;
            case self::FORM_OK:
                return $this->performInsert($vars);
        }
        return false;
    }

    private function checkGets($vars) {
        
    }

    private function checkPosts($vars) {
        if (!isset($_POST) || count($_POST) == 0) {
            return self::FORM_FIRST;
        }
        $valid = true;
        $valid = $this->checkImportantPosts('nome', $vars);
        $valid = $valid && $this->checkImportantPosts('email', $vars);
        $valid = $valid && $this->checkImportantPosts('password', $vars);
        $vars['morada'] = $this->testValue('morada', $vars);
        $vars['cidade'] = $this->testValue('cidade', $vars);
        $vars['nacionalidade'] = $this->testValue('nacionalidade', $vars);
        $vars['bi'] = $this->testValue('bi', $vars);
        $vars['telemovel'] = $this->testValue('telemovel', $vars);
        $vars['fixo'] = $this->testValue('fixo', $vars);
        $vars['sns'] = $this->testValue('sns', $vars);
        $vars['contribuinte'] = $this->testValue('contribuinte', $vars);
        $vars['datanascimento'] = $this->testValue('datanascimento', $vars);
        $vars['postal'] = $this->testValue('postal', $vars);
        if (!$valid) {
            return self::FORM_ERRORS;
        } else {
            return self::FORM_OK;
        }
    }

    private function checkImportantPosts($v_name, $vars) {
        if ($v_name == 'nome') {
            $vars['nome'] = $this->testValue("nome", $vars);
            if (count($vars['nome']) < 5) {
                $vars['nomeErr'] = "Tem de conter pelo menos 5 caracteres.";
                return false;
            }
        } else if ($v_name == 'email') {
            $vars['email'] = '';
            $vars['email1'] = '';
            if (isset($_POST['email'])) {
                $vars['email'] = $_POST['email'];
            }
            if (isset($_POST['email1'])) {
                $vars['email1'] = $_POST['email1'];
            }
            if (!eregi("/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i", $vars['email'])) {
                $vars['emailErr'] = "Email necessario";
                return false;
            } else if ($vars['email'] != $vars['email1']) {
                $vars['emailErr'] = "Os emails não são iguais";
                return false;
            }
        } else if ($v_name == 'password') {
            $vars['password'] = $this->testValue("password", $vars);
            $vars['password1'] = $this->testValue("password1", $vars);
            if (!eregi("/^([0-9a-zA-Z])+$/", $vars['password'])) {
                $vars['passwordErr'] = "Password necessária";
                return false;
            } else if ($vars['password'] != $vars['password1']) {
                $vars['passwordErr'] = "As passwords não são iguais";
                return false;
            }
        }
        return true;
    }

    private function testValue($v_name, $vars) {
        $data = '';
        if (isset($_POST[$v_name])) {
            $data = $_POST[$v_name];
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    private function performInsert($vars) {
        $db = new model_DB();
        if ($db->connected) {
            // Insert Person
            $nome = $vars['nome'];
            $datanascimento = $vars['datanascimento'];
            $sexo = $vars['sexo'];
            $nacionalidade = $vars['nacionalidade'];
            $morada = $vars['morada'];
            $postal = $vars['postal'];
            $cidade = $vars['cidade'];
            $email = $vars['email'];
            $contribuinte = $vars['contribuinte'];
            $bi = $vars['bi'];
            $telemovel = $vars['telemovel'];
            $fixo = $vars['fixo'];
            $sns = $vars['sns'];

            $query = "INSERT INTO person(name, date_of_birth, gender, nationality, address, post_code, city, email, fiscal_id, civil_id, mobile_phone, phone, sns)
                    VALUES ( $nome , $datanascimento , $sexo , $nacionalidade , $morada , $postal , $cidade , $email , $contribuinte , $bi , $telemovel , $fixo , $sns )";
            $db->conn->query($query);
            // Get Person ID
            $query = "SELECT * FROM person WHERE email =" . $vars['email'];
            $result = $db->conn->query($query);
            $row = mysql_fetch_row($result);
            $person_id = $row[0];
            // Hash the Pass
            $hashed_password = password_hash($vars['password'], PASSWORD_DEFAULT);
            // Insert User
            $query = "INSERT INTO `scml_user`(`email`,`hashed_password` , `salt`, `role`, `person_id`) 
                    VALUES ´('$email','$hashed_password','10','4','$person_id')";
            $db->conn->query($query);
            // Authenticate User
            $auth = new controller_Auth();
            $auth->authenticate($vars['email'], $vars['password']);
            $vars['user'] = $auth->getUser();
            return true;
        }
        return false;
    }

    public function get_view(&$vars) {
        return VIEW_DIR . 'pessoal/pessoal_registar.php';
    }

}
