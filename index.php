 <?php
require ("config.php");
session_start();
$action = isset($_GET['action'])?$_GET['action']:"";
 
 switch ($action){
	 
	 // code to pass the email variables from the webpage to the function
	 case 'post_message':
	 	new_messages();
	 	break;
	 
	 case 'home':
	 	display_welcome();
		break;
		
	case 'about':
	 	display_about_us();
		
		break;
		
	case 'services':
	 	display_services();
		break;
		
	case 'news':
	 	my_news();
		break;
		
	case 'downloads':
	 	require("templates/user/downloads.php");
		break;
		
	case 'contact':
	 	require("templates/user/contact.php");
		break;
		
		
	case 'news_reader';//.............................calls the pop-up function to read the mail.
	 news_reader();
	 break;

		
// CALLS THE FUNCTION WHICH IS IN HOMEPAGE.......................		
	default:
	
	display_welcome();
		//require("templates/user/home.php");
 }
 
 // |||||||| DISPLAY DYNAMIC DATA||||||
 
 function display_welcome()
 {
	$welcome = new aboutus;
 	$the_message=$welcome->get_welcome_message();
	$the_message1=$welcome->get_our_services();
	$the_message2=$welcome->get_our_team();
	$the_message3=$welcome->get_our_news();
	require("templates/user/home.php");
	
 }
 
  function display_services()
 {
	$welcome = new aboutus;
	$the_message4=$welcome->get_our_director();
	$the_message5=$welcome->get_our_quality();
	$the_message6=$welcome->get_our_customers();
	
	
	require("templates/user/services.php");
	
 }
 
  function display_about_us()
 {
	$welcome = new aboutus;
	$the_message7=$welcome->get_our_about();
	$the_message8=$welcome->get_our_story();
	$the_message9=$welcome->pharmacy();
	$the_message10=$welcome->kemsa();
	$the_message11=$welcome->moh();
	$the_message12=$welcome->others();
	
	
	$home_members = new members;
	$pgresults = array();
	$data = $home_members->the_members();
	$pgresults['members'] = $data['results'];
	
	require("templates/user/about.php");
	
 }
 
// DISPLAY NEWS ARTICLE

function my_news()
{
	
	$home_messages = new aboutus;
	$pgresults = array();
	$data = $home_messages->get_news();
	$pgresults['news'] = $data['results'];
	require ("templates/user/news.php");
	}
	
// SEND MESSAGES TO THE Email at NQCL

function new_messages(){
	$staff = new Utilities;
	$staff->storeMessage($_POST);
	$staff->insertMessage();
	
	$allert_message = "Message Sent Successfully!";
	
	require("templates/user/contact.php");  
}

// .......... the function to read the news article in the pop-up message box

function news_reader(){
	$newsid = isset($_GET['ID'])?$_GET['ID']:"";
	$saga = array();
	$saga['news'] = aboutus::all_news($newsid);

	require("templates/user/read_news.php");
	}



 ?>