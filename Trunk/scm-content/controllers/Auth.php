<?php
class controllers_Auth{
	const AUTHENTICATED = 'authenticated';
	const EMAIL = 'authenticated';
	const USER_ID = 'authenticated';
    
    
	public function _construct() {
		session_start();
	}
	
	public function isAuthenticated(){
		return isset($_SESSION[self::AUTHENTICATED]);
	}
	
	public function authenticate($email, $password){
		$db = new models_DBConnection();
		if(!$db->connected) 
			return false;
		
		$stmt = $db->conn->prepare('select id, hashed_password from scml_user where email=?');
		if(!$stmt){
			echo $db->conn->errno.': '.$db->conn->error;
			return false;
		}
		$stmt->bind_param('s', $email);
		if($stmt->execute())
		{
			$stmt->bind_result($userID, $userPass);
			if($stmt->fetch())
			{
				if(crypt($password, $userPass)==$userPass){
					$_SESSION[self::AUTHENTICATED]=true;
					$_SESSION[self::EMAIL]=$email;
					$_SESSION[self::USER_ID]=$userID;
					return true;

				}
			}
			$stmt->free_result();
		}
		return $this->isAuthenticated();
	}
	
	public function logOut(){
		$_SESSION = array();
		session_destroy();
	}
}