<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
  				mysql_connect($servername,$username,$password );//............. connecting to the Database
				mysql_select_db('db_nqcl');	

class Utilities{
	
	//message variables
	public $id = null;
	public $name = null;
	public $email = null;
	public $phone = null;
	public $subject = null;
	public $message = null;
	public $isread = null;
	public $timeposted = null;
	
	public function __construct($data = array())
	{
		if (isset($data['id'])) $this->id = (int)$data['id'];
		if (isset($data['name'])) $this->name = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['name']);
		if (isset($data['email'])) $this->email = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['email']);
		if (isset($data['phone'])) $this->phone = (int)$data['phone'];
		if (isset($data['subject'])) $this->subject = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['subject']);
		if (isset($data['message'])) $this->message =preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['message']);
		if (isset($data['isread'])) $this->isread =  $data['isread'];
		if (isset($data['dateposted'])) $this->timeposted = $data['dateposted'];
	}
	
	public function storeMessage($params){
		$this->__construct($params);
	}
	
	public function insertMessage(){
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "INSERT INTO messages (name,email,phone,subject,message,dateposted)VALUES (:name,:email,:phone,:subject,:message,CURRENT_TIMESTAMP)";
			$st = $conn->prepare($sql);
			$st->bindValue(":name",$this->name,PDO::PARAM_STR);
			$st->bindValue(":email",$this->email,PDO::PARAM_STR);
			$st->bindValue(":phone",$this->phone,PDO::PARAM_STR);
			$st->bindValue(":subject",$this->subject,PDO::PARAM_STR);
			$st->bindValue(":message",$this->message,PDO::PARAM_STR);
			$st->execute();
			//$this->id = $conn->lastInsertId();
			$conn = null;
			
			
		}
		catch (PDOException $e){
			echo $e;		
		}
	}

		// READ MAILS FUNCTIONS
		
		public static function  all_mails($mailid){//............f(x) to delete members from the DBase
		try{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "SELECT * FROM messages WHERE id = :id";
			$st = $conn->prepare($sql);
			$st->bindValue(":id",$mailid,PDO::PARAM_INT);
			$st->execute();
			$row = $st->fetch();
			
			 			
				$sql1 = "UPDATE messages SET isread = 1 WHERE id = '$mailid'";
			     mysql_query($sql1) or die(mysql_error());
			
			if (isset($row))return new Utilities($row);
			
		
			}
			
		catch(PDOException $e){
			
		}
	}
			
		// USED TO DISPLAY THE MESSAGES IN A TABLE FORMAT
		
		public function the_messages(){
			try{
				$conn = new PDO(DB_URL,DB_USER,DB_PASS);
				$sql = "SELECT * FROM messages ORDER BY isread ASC, dateposted DESC";
				$st = $conn->prepare($sql);

				$st->execute();
				$list = array();
				
				while ($row = $st->fetch()){
					$messages_results = new Utilities($row);
					$list[] = $messages_results;
				}
				
				return array("results"=>$list);
			}
			catch(PDOException $e){
			}
		}

}

?>