<?php
class admin{
	
	public $ID = null;
	public $title = null;
	public $f_name = null;
	public $l_name = null;
	public $email = null;
	public $password = null;
	public $lastlogin = null;
	
	public function __construct($data = array()){
		if (isset($data['ID'])) $this->ID = (int) $data['ID'];
		if (isset($data['title'])) $this->title = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['title']);
		if (isset($data['f_name'])) $this->f_name = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['f_name']);
		if (isset($data['l_name'])) $this->l_name = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['l_name']);
		if (isset($data['email'])) $this->email = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['email']);
		if (isset($data['password'])) $this->password = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['password']);
		if (isset($data['lastlogin'])) $this->lastlogin = $data['lastlogin'];
		}
		
	public function storeValues ($params){
		$this->__construct($params);
	}
	
	public static function login( $username,$userpass){
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "SELECT * FROM admin WHERE email = :mail_address AND password = md5(:userpass)";
			$st = $conn->prepare($sql);
			$st->bindValue(":mail_address",$username,PDO::PARAM_STR);
			$st->bindValue(":userpass",$userpass,PDO::PARAM_STR);
			$st->execute();
			$row = $st->fetch();
			if (isset($row)){
			$st_1 = "UPDATE admin SET lastlogin = CURRENT_TIMESTAMP WHERE ID = ".$row['ID'];
			$sql1 = $conn->prepare($st_1);
			$sql1->execute();
			}
			$conn = null;
			if ($row) {
				return (new admin($row));
			}
		}
		catch(PDOException $e){
			echo $e;
		}
	}	//end of the login function
	
	public function addadmin(){//.............add a new admin to the database
		try {
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "INSERT INTO admin (title,lastlogin,f_name,l_name,email,password) VALUES (:title,CURRENT_TIMESTAMP,:f_name,:l_name,:email,md5(:password))";
			$st = $conn->prepare($sql);
			$st->bindValue(":title",$this->title,PDO::PARAM_STR);
			$st->bindValue(":f_name",$this->f_name,PDO::PARAM_STR);
			$st->bindValue(":l_name",$this->l_name,PDO::PARAM_STR);
			$st->bindValue(":email",$this->email,PDO::PARAM_STR);
			$st->bindValue(":password",$this->password,PDO::PARAM_INT);
			$st->execute();
			$conn = null;
			
			/*echo '<script>alert("New User Created Successfully!");</script>';	*/
			
			
		}
		catch(PDOException $e){
			echo $e;
		}
	}
	
	public static function  delete_admin($adminid){//............f(x) to delete admin from the DBase
	
	if($adminid == '2'or $adminid =='25'){
		/*echo '<script>alert("Sorry, User cannot be deleted!");</script>';*/
		
		die(header('Location: admin.php?action=settings'));
	}else{
		try{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "DELETE FROM admin WHERE ID = :ID";		
			
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$adminid,PDO::PARAM_INT);
			$st->execute();
			$conn=null;
			
			/*echo '<script>alert("You Have Successfully Deleted this Record!");</script>';	*/
			die(header('Location: admin.php?action=settings'));					
			}
		catch(PDOException $e){
			header('Location: ../admin.php?action=settings');
			
		}
	}
	
	}
	
	public function changeProfile(){//......................used to change the currect user profile
		if (is_null($this->ID)) echo "error";
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "UPDATE admin SET password = md5(:password), title = :title, 
			f_name = :f_name, l_name = :l_name, email = :email  WHERE ID = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$this->ID,PDO::PARAM_INT);
			$st->bindValue(":title",$this->title,PDO::PARAM_STR);
			$st->bindValue(":f_name",$this->f_name,PDO::PARAM_STR);
			$st->bindValue(":l_name",$this->l_name,PDO::PARAM_STR);
			$st->bindValue(":email",$this->email,PDO::PARAM_STR);
			$st->bindValue(":password",$this->password,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
			
		}
		catch (PDOException $e){
		}
	}
	
	//hawi's
	function get_admin_members()
	{
		try 
		{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql ="select * from admin ORDER BY title";
			$st = $conn->prepare($sql);
			$st->execute();
			
			$list = array();
				
			while ($row = $st->fetch()){
				$admin_results = new admin($row);
				$list[] = $admin_results;
			}
			
				return array("results"=>$list);
			
		}catch(PDOException $e){
			echo $e;
		}
	}
	
	
	
	/*function removing()//.............................function to remove the active users from the database
	{
		try
		{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "DELETE FROM admin WHERE ID=:ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$admin_id,PDO::PARAM_INT);
			$st->execute();
		}catch(PDOException $e){
			echo $e;
		}
	}*/
	
}
?>