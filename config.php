<?php
ob_start();


date_default_timezone_set("Africa/Nairobi");

define ("DB_URL","mysql:host=localhost;dbname=db_nqcl");
define ("DB_USER","root");
define ("DB_PASS","");
define ("ARTICLE_IMAGE_PATH", "images/pictures" );
define ("IMG_TYPE_FULLSIZE", "fullsize" );
define ("IMG_TYPE_THUMB", "thumb" );
define ("ARTICLE_THUMB_WIDTH", 200 );
define ("JPEG_QUALITY", 85 ); 

require ("classes/admin_end.php");
require ("classes/members.php");
require ("classes/all_text_data.php");
require ("classes/messages.php");
// require ("classes/image_upload.php");


function handleException( $exception ) {
  echo "Sorry, a problem occurred. Contact the site's Administrator";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );


?>