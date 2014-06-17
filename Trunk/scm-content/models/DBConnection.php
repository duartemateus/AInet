<?php
class models_DBConnection{
	const BD = 'scml_db';
	const USER = 'scml';
	const PASSWORD = 'scmladmin';
	const HOST = '127.0.0.1';
	
	public $conn;
	public $connected;
	
	
	public function __construct() {
		@$this->conn = new mysqli(self::HOST, self::USER, self::PASSWORD, self::BD);
		if($this->conn->connect_errno){
			$this->printMysqlError($conn->connect_errno,$conn->connect_error);
			$this->connected=false;
		}
		else
		{
			$this->connected=true;
		}
	}
	
	public function loginUser($email, $password){
		$query = 'select id from scml_user where email=\'?\' and hashed_password=\'?\';';
		$stmt = $this->conn->prepare($query);
		if(!$stmt){
			$this->printMysqlError($stmt->errno,$stmt->error);
		}
		else
		{
			$stmt->bind_param('ss', $email, $password);
			if(!$stmt->execute())
				printMysqlError();
			$stmt->bind_result($stmt);
			$stmt->fetch();
			return $id;
		}
		return -1;
	}
	
}