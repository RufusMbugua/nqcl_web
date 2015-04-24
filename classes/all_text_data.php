<?php

ob_start();

class aboutus{
	public $ID = null;
	public $about_type = null;
	public $about_body = null;
	
	public $news_head = null;
	public $news_body = null;
	
	public $data_type = null;
	public $data_body = null;
	public $news_type = null;
	public $time_posted = null;
	
	
	public function __construct($data = array()){
		if (isset($data['ID'])) $this->ID = (int) $data['ID'];
		if (isset($data['about_type'])) $this->about_type = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['about_type']);
		if (isset($data['about_body'])) $this->about_body = $data['about_body'];
		
		if (isset($data['news_head'])) $this->news_head = $data['news_head'];
		if (isset($data['news_body'])) $this->news_body = $data['news_body'];
		if (isset($data['news_type'])) $this->news_type = $data['news_type'];
		if (isset($data['time_posted'])) $this->time_posted = $data['time_posted'];
		
		
		if (isset($data['data_type'])) $this->data_type = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['data_type']);
		if (isset($data['data_body'])) $this->data_body = $data['data_body'];
		
		
	}
	
	public function storeValues($params){
		$this->__construct($params);
	}
	
	
	public function aboutupdate(){
		if (is_null($this->about_type)) echo "error";
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "UPDATE about SET about_body = :about_body WHERE ID = :about_type";
			$st = $conn->prepare($sql);
			$st->bindValue(":about_type",$this->about_type,PDO::PARAM_STR);
			$st->bindValue(":about_body",$this->about_body,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
		}
		catch (PDOException $e){
		}
	}

	// used to select the update items home_n_services....................................

	public function the_messages(){
			try{
				$conn = new PDO(DB_URL,DB_USER,DB_PASS);
				$sql = "SELECT * FROM home_n_services ORDER BY ID";
				$st = $conn->prepare($sql);

				$st->execute();
				$list = array();
				
				while ($row = $st->fetch()){
					$messages_results = new aboutus($row);
					$list[] = $messages_results;
				}
				
				return array("results"=>$list);
			}
			catch(PDOException $e){
			}
		}

		// used to select the update items about us....................................

	public function the_messages_x(){
			try{
				$conn = new PDO(DB_URL,DB_USER,DB_PASS);
				$sql = "SELECT * FROM about ORDER BY ID";
				$st = $conn->prepare($sql);

				$st->execute();
				$list = array();
				
				while ($row = $st->fetch()){
					$messages_results_x= new aboutus($row);
					$list[] = $messages_results_x;
				}
				
				return array("results_x"=>$list);
			}
			catch(PDOException $e){
			}
		}
// End of Select update items..................................................
	
	
	public function new_article(){//.............function adds a new a new article to the database
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "INSERT INTO news (news_head, news_body,news_type,time_posted) VALUES (:news_head, :news_body,:news_type,CURRENT_TIMESTAMP)";
			$st = $conn->prepare($sql);
			$st->bindValue(":news_head",$this->news_head,PDO::PARAM_STR);
			$st->bindValue(":news_body",$this->news_body,PDO::PARAM_STR);
			$st->bindValue(":news_type",$this->news_type,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
			
		}
		catch(PDOException $e){
			
		}
	}

	// to update the articles

	public function article_changes(){
		  if (is_null($this->news_body)) echo "error";
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "UPDATE news SET news_body = :news_body, news_head = :news_head WHERE Id = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$this->ID,PDO::PARAM_INT);
			$st->bindValue(":news_head",$this->news_head,PDO::PARAM_STR);
			$st->bindValue(":news_body",$this->news_body,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
		}
		catch (PDOException $e){
		}
	}
	// EDIT CMS............ CMS Changes

	public function cms_changes(){
		  if (is_null($this->data_body)) echo "error";
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "UPDATE home_n_services SET data_body = :data_body WHERE ID = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$this->ID,PDO::PARAM_INT);
			$st->bindValue(":data_body",$this->data_body,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
		}
		catch (PDOException $e){
		}
	}

	//cms Changes on about us page

	public function cms_changes_2(){
		  if (is_null($this->about_body)) echo "error";
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "UPDATE about SET about_body = :about_body WHERE ID = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$this->ID,PDO::PARAM_INT);
			$st->bindValue(":about_body",$this->about_body,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
		}
		catch (PDOException $e){
		}
	}

	// End of cms Changes


	
	public static function  deletenews($newsid){//............f(x) to delete news from the DBase
		try{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "DELETE FROM news WHERE ID = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$newsid,PDO::PARAM_INT);
			$st->execute();
			$conn=null;
			
			/*echo '<script>alert("You Have Successfully Deleted this Record!");</script>';*/		
			
			die(header('Location: admin.php?action=messages'));				
			}
		catch(PDOException $e){
			
		}
			
	}
	
	public function all_home_items(){
		if (is_null($this->data_type)) echo "error";
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "UPDATE home_n_services SET data_body = :data_body WHERE ID = :data_type";
			$st = $conn->prepare($sql);
			$st->bindValue(":data_type",$this->data_type,PDO::PARAM_STR);
			$st->bindValue(":data_body",$this->data_body,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
		}
		catch (PDOException $e){
		}
	}
	
	// ........................READ NEWS IN A POP UP MESSAGE BOX

		
		public static function  all_news($newsid){
		try{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "SELECT * FROM news WHERE ID = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$newsid,PDO::PARAM_INT);
			$st->execute();
			$row = $st->fetch();
					
			if (isset($row))return new aboutus($row);
			
			}
			
		catch(PDOException $e){
			
		}
	}

	// .......................EDIT ALL CMS CONTENT

		
		public static function  all_content($art_id_x){
		try{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "SELECT * FROM home_n_services WHERE id = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$art_id_x,PDO::PARAM_INT);
			$st->execute();
			$row = $st->fetch();

			if (isset($row))return new aboutus($row);
			
			}
			
		catch(PDOException $e){
			
		}
	}

	// .......................EDIT ALL CMS CONTENT............ for About us pages

		
		public static function  all_content_xx($art_id_xx){
		try{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "SELECT * FROM about WHERE id = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$art_id_xx,PDO::PARAM_INT);
			$st->execute();
			$row = $st->fetch();
								
			if (isset($row))return new aboutus($row);
			
			}
			
		catch(PDOException $e){
			
		}
	}
	
	//||||||||| HOME|||||||||||||||
	
	function get_welcome_message()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select data_body from home_n_services where ID='1' and data_type='WELCOME TO NQCL'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['data_body'];
	}
	
	function get_our_services()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select data_body from home_n_services where ID='2' and data_type='OUR SERVICES'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['data_body'];
	}
	
	function get_our_team()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select data_body from home_n_services where ID='3' and data_type='OUR TEAM'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['data_body'];
	}
	
	function get_our_news()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select data_body from home_n_services where ID='4' and data_type='NEWS AND EVENTS'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['data_body'];
	}
	
	
	//||||||||| SERVICES|||||||||||||||
	
	function get_our_director()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select data_body from home_n_services where ID='5' and data_type='DIRECTORS REMARKS'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['data_body'];
	}
	
	function get_our_quality()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select data_body from home_n_services where ID='6' and data_type='QUALITY ASSURANCE'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['data_body'];
	}
	
	function get_our_customers()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select data_body from home_n_services where ID='7' and data_type='CUSTOMERS WHO TRUST IN US'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['data_body'];
	}
	
	//||||||||| ABOUT US|||||||||||||||
	
	function get_our_about()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select about_body from about where ID='1' and about_type='ABOUT US'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['about_body'];
	}
	
	function get_our_story()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select about_body from about where ID='5' and about_type='OUR STORY'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['about_body'];
	}
	
	function pharmacy()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select about_body from about where ID='6' and about_type='PHARMACY AND POISONS BOARD'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['about_body'];
	}
	
	function kemsa()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select about_body from about where ID='7' and about_type='KEMSA'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['about_body'];
	}
	
	function moh()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select about_body from about where ID='8' and about_type='MOH'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['about_body'];
	}
	
	function others()
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="select about_body from about where ID='9' and about_type='OTHER LINKS'";
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
		
		return $row['about_body'];
	}
	// |||||| NEWS ARTICLE|||||
	
	function get_news()//..................................used also to display the diffrent news to a table format
	{
		$conn = new PDO(DB_URL,DB_USER,DB_PASS);
		$sql="SELECT * FROM news ORDER BY time_posted DESC";
		$st = $conn->prepare($sql);
		$st->execute();
				$list = array();
				
				while ($row = $st->fetch())
				{
					$news_results = new aboutus($row);
					$list[] = $news_results;
				}
				
				return array("results"=>$list);
	}
	
}
?>

<?php

class amembers{
	public $id = null;
	public $category = null;
	public $ptype = null;
	public $imagez = " ";
	public $description = null;
	public $location = null;
	
	
	
	public function __construct($data = array()){
		if (isset($data['ID'])) $this->id = (int) $data['ID'];
		if (isset($data['type'])) $this->category = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['type']);
		if (isset($data['title'])) $this->ptype = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['title']);
		if (isset($data['name'])) $this->description = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['name']);
		if (isset($data['position'])) $this->location = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['position']);
		if (isset($data['search_file'])) $this->imagez = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['mem_photo']);
	}
	
	public function storeValues($params){
		$this->__construct($params);
	}
	
	public function newHouse(){
		try{
			$conn = new PDO(DB_URL,DB_USER,DB_PASS);
			$sql = "INSERT INTO members (title,name,position,mem_photo,type)"." VALUES (:title,:name,:position,:mem_photo,:type) ";
			$st = $conn->prepare($sql);
			$st->bindValue(":title",$this->ptype,PDO::PARAM_STR);
			$st->bindValue(":name",$this->description,PDO::PARAM_STR);
			$st->bindValue(":position",$this->location,PDO::PARAM_STR);
			$st->bindValue(":type",$this->category,PDO::PARAM_STR);
			$st->bindValue(":mem_photo",$this->imagez,PDO::PARAM_STR);
			$st->execute();
			$this->id = $conn->lastInsertId();     //DONT KNOW WHAT FOR
			$conn = null;
			
		}
		catch(PDOException $e){
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
			$sql = "UPDATE properties SET title = :title ,name = :name,position = :position,type = :type, mem_photo = :mem_photo WHERE ID = :ID";
			$st = $conn->prepare($sql);
			$st->bindValue(":ID",$this->id,PDO::PARAM_INT);
			$st->bindValue(":title",$this->ptype,PDO::PARAM_STR);
			$st->bindValue(":name",$this->description,PDO::PARAM_STR);
			$st->bindValue(":position",$this->location,PDO::PARAM_STR);
			$st->bindValue(":type",$this->category,PDO::PARAM_STR);
			$st->bindValue(":mem_photo",$this->imagez,PDO::PARAM_STR);
			$st->execute();
			$conn = null;
		}
		catch (PDOException $e){
		}
	}
	
	// USED TO DISPLAY THE MESSAGES IN A TABLE FORMAT
		
		public function the_members(){
			try{
				$conn = new PDO(DB_URL,DB_USER,DB_PASS);
				$sql = "SELECT * FROM members";
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