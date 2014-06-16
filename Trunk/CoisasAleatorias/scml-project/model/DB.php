<?php

class model_DB {

    public $conn;
    public $connected;

    public function __construct() {
        require_once '../config/dbaccess.php';
        $this->conn = new mysqli($host, $user, $password, $database);
        if ($this->conn->connect_errno) {
            $this->printMysqlError($conn->connect_errno, $conn->connect_error);
            $this->connected = false;
        } else {
            $this->connected = true;
        }
    }

    public function select($query) {
        return $this->conn->query($query);
    }

    public function loginUser($email, $password) {
        $query = 'select id from scml_user where email=\'?\' and hashed_password=\'?\';';
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            $this->printMysqlError($stmt->errno, $stmt->error);
        } else {
            $stmt->bind_param('ss', $email, $password);
            if (!$stmt->execute()) {
                printMysqlError();
            }
            $stmt->bind_result($stmt);
            $stmt->fetch();
            return $id;
        }
        return -1;
    }

}
