<?php

class controller_PessoalEditar {

    const FORM_FIRST = 0;
    const FORM_ERRORS = 1;
    const FORM_OK = 2;

    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 6;
        $vars['secondnavbar'] = 2;
    }

    public function prepare_vars(&$vars) {
        $fValid = $this->checkPosts($vars);
        switch ($fValid) {
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
        $valid = $valid && checkImportantPosts('email', $vars);
        $valid = $valid && checkImportantPosts('password', $vars);
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
            $vars['email'] = $this->testValue("email", $vars);
            $vars['email1'] = $this->testValue("email1", $vars);
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

            $query = "UPDATE person SET name='" . $var['nome'] . "',date_of_birth='" . $var['datanascimento'] . "',email='" . $var['email'] . "',gender='" . $var['sexo'] . "',nationality='" . $var['nacionalidade'] . "',address='" . $var['morada'] . "',post_code='" . $var['postal'] . "',city='" . $var['cidade'] . "',email='" . $var['email'] . "',fical_id='" . $var['contribuinte'] . "',civil_id='" . $var['bi'] . "',mobile_phone='" . $var['telemovel'] . "',phone='" . $var['fixo'] . "',sns='" . $var['sns'] . "' where id='" . $_SESSION['user_id'] . "'";
            $db->conn->query($query);
            // Get Person ID
            $query = "SELECT * FROM person WHERE email =" . $var['email'];
            $result = $db->conn->query($query);
            $row = mysql_fetch_row($result);
            $id = $row[0];
            // Hash the Pass
            $hashed_password = password_hash($var['password'], PASSWORD_DEFAULT);
            // Insert User
           $query = "UPDATE scml_user SET email='" . $var['email'] . "',date_of_birth='" . $hashed_password . "' where id='" . $_SESSION['user_id'] . "'";
            $db->conn->query($query);
            // Authenticate User
            $auth = new controller_Auth();
            $auth->authenticate($var['email'], $var['password']);
            $vars['user'] = $auth->getUser();
            return true;
        }
        return false;
    }

    public function get_view(&$vars) {
        return VIEW_DIR . 'pessoal/pessoal_editar.php';
    }

}