<?php

class members{
	public $id = null;
	public $name = null;
	public $category = null;
	public $ptype = null;
	public $imagez = ".jpg";
	public $description = null;
	public $location = null;
	public $rank =null;
	
	
	
	public function __construct($data = array()){
		if (isset($data['ID'])) $this->id = (int) $data['ID'];
		if (isset($data['type'])) $this->category = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['type']);
		if (isset($data['title'])) $this->ptype = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['title']);
		if (isset($data['name'])) $this->name = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['name']);
		if (isset($data['name'])) $this->description = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['name']);
		if (isset($data['position'])) $this->location = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['position']);

		if (isset($data['rank'])) $this->rank = (int) $data['rank'];
		if (isset($data['imagepath'])) $this->imagez = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['imagepath']);
	}
	
	public function storeValues($params){
		$this->__construct($params);
	}
	
	public function newHouse(){
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "INSERT INTO members (title,name,position,imagepath,type)"." VALUES (:title,:name,:position,:imagepath,:type) ";
			$st = $conn->prepare($sql);
			$st->bindValue(":title",$this->ptype,PDO::PARAM_STR);
			$st->bindValue(":name",$this->description,PDO::PARAM_STR);
			$st->bindValue(":position",$this->location,PDO::PARAM_STR);
			$st->bindValue(":type",$this->category,PDO::PARAM_STR);
			$st->bindValue(":imagepath",$this->imagez,PDO::PARAM_STR);
			$st->execute();
			$this->id = $conn->lastInsertId();     //DONT KNOW WHAT FOR
			$conn = null;
			
		}
		catch(PDOException $e){
		}
	}
	
	public	function get_team_members(){

		try 
		{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql ="select title,name from members";
			$st = $conn->prepare($sql);
			$st->execute();
			
			$list = array();
				
			while ($row = $st->fetch()){
				$admin_results = new members($row);
				$list[] = $admin_results;
			}
			
				return array("results"=>$list);
			
		}catch(PDOException $e){
			echo $e;
		}
	}
	
	public function update(){
		if (is_null($this->id)) echo "error";
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "UPDATE members SET title = :title ,name = :name,position = :position,type = :type WHERE ID = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$this->id,PDO::PARAM_INT);
			$st->bindValue(":title",$this->ptype,PDO::PARAM_STR);
			$st->bindValue(":name",$this->description,PDO::PARAM_STR);
			$st->bindValue(":position",$this->location,PDO::PARAM_STR);
			$st->bindValue(":type",$this->category,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
		}
		catch (PDOException $e){
		}
	}
		public function fupdate(){
		if (is_null($this->id)) echo "error";
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "UPDATE properties SET title = :title ,name = :name,position = :position,type = :type, imagepath = :imagepath WHERE ID = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$this->id,PDO::PARAM_INT);
			$st->bindValue(":title",$this->ptype,PDO::PARAM_STR);
			$st->bindValue(":name",$this->description,PDO::PARAM_STR);
			$st->bindValue(":position",$this->location,PDO::PARAM_STR);
			$st->bindValue(":type",$this->category,PDO::PARAM_STR);
			$st->bindValue(":imagepath",$this->imagez,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
		}
		catch (PDOException $e){
		}
	}
	

	// USED TO DISPLAY THE MEMBERS IN A TABLE FORMAT
		
		public function the_members(){
			try{
				$conn = new PDO(DB_URL,DB_USER,DB_PASS);
				$sql = "SELECT * FROM members ORDER BY position ASC";
				$st = $conn->prepare($sql);

				$st->execute();
				$list = array();
				
				while ($row = $st->fetch()){
					$member_results = new members($row);
					$list[] = $member_results;
				}
				
				return array("results"=>$list);
			}
			catch(PDOException $e){
			}
		}
		
		
		public static function  delete_members($memberid){//............f(x) to delete members from the DBase
		try{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "DELETE FROM members WHERE id = :id";
			$st = $conn->prepare($sql);
			$st->bindValue(":id",$memberid,PDO::PARAM_INT);
			$st->execute();
			$conn=null;
			
			/*echo '<script>alert("You Have Successfully Deleted this Record!");</script>';	*/					
			}
		catch(PDOException $e){
			
		}
			
	}
//............Edit the staff members...............	

	public static function  edit_staff($staffid){
		//error_reporting( error_reporting() & ~E_NOTICE );
		try{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);

			$sql = "SELECT * FROM members WHERE id = :id";
			$st = $conn->prepare($sql);
			$st->bindValue(":id",$staffid,PDO::PARAM_INT);
			$st->execute();
			$row = $st->fetch();
						
			if (isset($row))return new members($row);
		
			}
			
		catch(PDOException $e){
			

		}
	}


	
	//elated.com image upload
	public function storeUploadedImage( $image ) {
 
    if ( $image['error'] == UPLOAD_ERR_OK )
    {
      
      $this->deleteImages();
 
      // Get and store the image filename extension
      $this->imagez = strtolower( strrchr( $image['name'], '.' ) );
 
      // Store the image
 
      $tempFilename = trim( $image['tmp_name'] ); 
 
      if ( is_uploaded_file ( $tempFilename ) ) {
if ( !( move_uploaded_file( $tempFilename, $this->getImagePath() ) ) ) trigger_error( " Couldn't move uploaded file.", E_USER_ERROR );if ( !( chmod( $this->getImagePath(), 0666 ) ) ) trigger_error( "Couldn't set permissions on uploaded file.", E_USER_ERROR );
      }
 
      // Get the image size and type
      $attrs = getimagesize ( $this->getImagePath() );
      $imageWidth = $attrs[0];
      $imageHeight = $attrs[1];
      $imageType = $attrs[2];
 
      // Load the image into memory
      switch ( $imageType ) {
        case IMAGETYPE_GIF:
          $imageResource = imagecreatefromgif ( $this->getImagePath() );
          break;
        case IMAGETYPE_JPEG:
          $imageResource = imagecreatefromjpeg ( $this->getImagePath() );
          break;
        case IMAGETYPE_PNG:
          $imageResource = imagecreatefrompng ( $this->getImagePath() );
          break;
        default:
          trigger_error ( "Unhandled or unknown image type ($imageType)", E_USER_ERROR );
      }
 
      // Copy and resize the image to create the thumbnail
      $thumbHeight = intval ( $imageHeight / $imageWidth * ARTICLE_THUMB_WIDTH );
      $thumbResource = imagecreatetruecolor ( ARTICLE_THUMB_WIDTH, $thumbHeight );
      imagecopyresampled( $thumbResource, $imageResource, 0, 0, 0, 0, ARTICLE_THUMB_WIDTH, $thumbHeight, $imageWidth, $imageHeight );
 
      // Save the thumbnail
      switch ( $imageType ) {
        case IMAGETYPE_GIF:
          imagegif ( $thumbResource, $this->getImagePath( IMG_TYPE_THUMB ) );
          break;
        case IMAGETYPE_JPEG:
          imagejpeg ( $thumbResource, $this->getImagePath( IMG_TYPE_THUMB ), JPEG_QUALITY );
          break;
        case IMAGETYPE_PNG:
          imagepng ( $thumbResource, $this->getImagePath( IMG_TYPE_THUMB ) );
          break;
        default:
          trigger_error ( "Unhandled or unknown image type ($imageType)", E_USER_ERROR );
      }
 
      $this->fupdate();
    }
  }
 
 
  /**
  * Deletes any images and/or thumbnails associated with the article
  */
 
  public function deleteImages() {
 
    // Delete all fullsize images for this article
    foreach (glob( ARTICLE_IMAGE_PATH . "/" . IMG_TYPE_FULLSIZE . "/" . $this->id . ".*") as $filename) {
      if ( !unlink( $filename ) ) trigger_error( "Couldn't delete image file.", E_USER_ERROR );
    }
     
    // Delete all thumbnail images for this article
    foreach (glob( ARTICLE_IMAGE_PATH . "/" . IMG_TYPE_THUMB . "/" . $this->id . ".*") as $filename) {
      if ( !unlink( $filename ) ) trigger_error( "Couldn't delete thumbnail file.", E_USER_ERROR );
    }
 
    // Remove the image filename extension from the object
    $this->imagez = "";
  }
 
 
  /**
  * Returns the relative path to the article's full-size or thumbnail image
  *
  * @param string The type of image path to retrieve (IMG_TYPE_FULLSIZE or IMG_TYPE_THUMB). Defaults to IMG_TYPE_FULLSIZE.
  * @return string|false The image's path, or false if an image hasn't been uploaded
  */
 
  public function getImagePath( $type = IMG_TYPE_FULLSIZE) {
    return ( $this->id && $this->imagez ) ? ( ARTICLE_IMAGE_PATH . "/$type/" . $this->id . $this->imagez ) : false;
  } 
  
   public function getDisplayImagePath( $type = IMG_TYPE_THUMB) {
    return ( $this->id && $this->imagez ) ? ( ARTICLE_IMAGE_PATH . "/$type/" . $this->id . $this->imagez ) : false;
  } 
  

}
?>