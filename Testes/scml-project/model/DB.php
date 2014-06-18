<?php

class model_DB {
    const host = '127.0.0.1';
    const user = 'scml';
    const password = 'scmladmin';
    const database = 'scml_db';
    
    public $conn;
    public $connected;

    
    public function __construct() {
        $this->conn = new mysqli(self::host, self::user, self::password, self::database);
        if ($this->conn->connect_errno) {
            $this->printMysqlError($conn->connect_errno, $conn->connect_error);
            $this->connected = false;
        } else {
            $this->connected = true;
        }
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
