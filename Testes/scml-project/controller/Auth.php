<?php

class controller_Auth {

    const AUTHENTICATED = 'authenticated';
    const EMAIL = 'email';
    const USER_ID = 'user_id';
    const USER_ROLE = 'user_role';

    public function _construct() {
    }

    public function isAuthenticated() {
        return isset($_SESSION[self::AUTHENTICATED]);
    }

    public function authenticate($email, $password) {
        $db = new model_DB();
        if (!$db->connected) {
            return;
        }
        $stmt = $db->conn->prepare('select id, hashed_password, role from scml_user where email=?');
        if (!$stmt) {
            return;
        }
        $stmt->bind_param('s', $email);
        if ($stmt->execute()) {
            $stmt->bind_result($userID, $hashedPass, $userRole);
            if ($stmt->fetch()) {
                if (password_verify($password, $hashedPass)) {
                    $_SESSION[self::AUTHENTICATED] = true;
                    $_SESSION[self::EMAIL] = $email;
                    $_SESSION[self::USER_ID] = $userID;
                    $_SESSION[self::USER_ROLE] = $userRole;
                }
            }
            $stmt->free_result();
        }
    }


    public function logOut() {
        $_SESSION = array();
        session_destroy();
    }

    public function getUser() {
        if ($this->isAuthenticated()) {
            $db = new model_DB();
            if (!$db->connected) {
                return null;
            }
            $result = $db->conn->query('SELECT p.* FROM `person` p, `scml_user` u WHERE p.id = u.person_id AND u.id = ' . $_SESSION[self::USER_ID]);
            return mysqli_fetch_array($result);
        }
        return null;
    }

}
