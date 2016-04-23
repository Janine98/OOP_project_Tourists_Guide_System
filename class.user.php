<?php

require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function register($username,$password,$name,$birthdate,$address,$religion,$country,$nationality,$email_address,$contact_no)
	{
		try
		{
			$new_password = password_hash($password, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(username,password,name,birthdate,address,religion,country,nationality,email_address,contact_no) 
		                                               VALUES(:username, :password , :name, :birthdate, :address, :religion, :country, :nationality, :email_address, :contact_no)");
												  
			$stmt->bindparam(":username", $username);
			$stmt->bindparam(":password", $new_password);
            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":birthdate", $birthdate);
            $stmt->bindparam(":address", $address);
            $stmt->bindparam(":religion", $religion);
            $stmt->bindparam(":country", $country);
            $stmt->bindparam(":nationality", $nationality);
            $stmt->bindparam(":email_address", $email_address);
            $stmt->bindparam(":contact_no", $contact_no);

			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	
	public function doLogin($username,$password)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT id_user, username, password FROM users WHERE username=:username");
			$stmt->execute(array(':username'=>$username));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($password, $userRow['password']))
				{
					$_SESSION['user_session'] = $userRow['id_user'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>