<?php
require ("config.php");
ob_start();
session_start();
$action = isset($_GET['action'])?$_GET['action']:"";
switch ($action){
		
	case 'login':
		adminlogin();
		break;
		
		
	case 'newuser':
		addadmin();
		break;
		
	case 'newmember':
		addmember();
		break;
		
	case 'add_about':   		// for the about us text data
		insertabout();
		break;
		
	case 'add_news':   		// for the  news articles us text data
		post_news();
		break;
		
	case 'add_home_services':  // for the  home and Services us text data
		home_n_services();
		break;
		
	case 'readmail':
		readmessages();
		break;
		
	case 'searchmails':
		searchusermail();
		break;
		
	case 'settings':
		admins();//...........to display the team members in the settings page | Bac_end
		break;
		
	case 'home':
		require("templates/admin/home.php");
		break;
		
	case 'remove_user':
		 // remove_user();//........... used to call the function to remove a user from the Dbase
		  admin_memebers();
		break;
		
	case 'editprofile':
		editprofile();
		break;
		
	case 'messages':
		news_articles();
		break;
		
	case 'about':
		team_memebers();
		break;
		
	case 'logout':
		require("templates/admin/login.php");
		break;
		
	case 'profile':
		require("templates/admin/myprofile.php");
		break;
		
	case 'mails':
		home_messages();//.............CALLS THE FUNCTIONS TO DISPLAY MESSAGES
		
		break;
		
	case 'read_mails':
		mail_reader();
		break;

	case 'about_edit':
		about_edit();
		break;

	case 'respond':
		respond();
		break;

	case 'get_data':
		require('classes/get_data.php');
		break;
		
//......................All DELETE CASES........................
	
	case 'del_news':
		deletenews();
		break;
	case 'del_member':
		delete_member();
		break;
	case 'del_admin':
		delete_administrator();	
		
		
//......................All EDIT CASES........................


	case 'edit_article':
		edit_article();
		break;

	case 'article_changes':
		article_changes();
		break;

// CMS Changes

	case 'cms_changes':
		cms_changes();
		break;

	case 'cms_changes_2':
		cms_changes_2();
		break;
	
//..............DEFAULT......................
			
	default:
		require("templates/admin/login.php");
	
}


//||||||||ADMIN METHODS||||||||

function adminlogin(){
	$user = isset($_POST['mail_address'])?$_POST['mail_address']:"";
	$pass = isset($_POST['password'])?$_POST['password']:"";
	$admin = admin::login($user,$pass);

	// creation of the sessions ... usually after the login.
	
	if (isset($admin->email) ){
		$_SESSION['administrator'] = $admin->title." ". $admin->f_name." ".$admin->l_name;
		$_SESSION['administratorID'] = $admin->ID;
		$_SESSION['admin0'] = $admin->title;
		$_SESSION['admin1'] = $admin->f_name;
		$_SESSION['admin2'] = $admin->l_name;
		$_SESSION['admin3'] = $admin->email;
		$_SESSION['admin4'] = $admin->password;

		
		$a = "Loading, Please Wait...";
		var_dump($a);
		
	header('Location: admin.php?action=mails');
	}
	else{
		$errormessage = "Wrong Username or Password";
		//$action = "login";
		require ("templates/admin/login.php");		
	
		
	}
}

function addadmin(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$staff = new admin;
	$staff->storeValues($_POST);
	$staff->addadmin();
	
	header('Location: admin.php?action=settings');
}


function admin_memebers(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$admin = new admin;
	$admin_members=$admin->get_admin_members();
	$results['admin']=$admin_members['results'];
	require("templates/admin/settings.php");
}
function editprofile(){//.........used to edit the profile of the active user
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$customer = new admin;
	$customer->storeValues($_POST);
	$customer->changeProfile();
	
	header('Location: admin.php?action=mails');
}

//MEMBER Methods

function addmember(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$property = new members;
	$property->storeValues($_POST);
	$property->newHouse();
	$property->storeUploadedImage($_FILES['imagepath']);
	
	header('Location: admin.php?action=about'); 
}
 //...................................................................... to display the team members in a table format
function team_memebers(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$home_members = new members;
	$pgresults = array();
	$data = $home_members->the_members();
	$pgresults['members'] = $data['results'];
	
	require("templates/admin/about.php");//.................used to call the page that the functions lie
}
function admins(){
	$actives = new admin;//....................... to display administrators in the db to the tables in the admin end
	$doha = array();
	$data = $actives->get_admin_members();
	$doha['active_user'] = $data['results'];
	
	require("templates/admin/settings.php");//.................used to call the page that the functions lie
}
//ALL TEXT METHODS

function insertabout(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$staff = new aboutus;
	$staff->storeValues($_POST);
	$staff->aboutupdate();
	
	require("templates/admin/home.php");  
}

function post_news(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$staff = new aboutus;
	$staff->storeValues($_POST);
	$staff->new_article();
	
	header('Location: admin.php?action=messages');  
}

function home_n_services(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$staff = new aboutus;
	$staff->storeValues($_POST);
	$staff->all_home_items();
	
	require("templates/admin/home.php");  
}

//..............All MESSAGE METHODS..............//

function home_messages(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$home_messages = new aboutus;
	$pgresults = array();
	$data = $home_messages->the_messages();
	$pgresults['messages'] = $data['results'];

// used to call data into the other table [About us table]
	$home_messages_x = new aboutus;
	$pgresults_x = array();
	$data_x = $home_messages_x->the_messages_x();
	$pgresults_x['messages_x'] = $data_x['results_x'];
	
	require("templates/admin/mails.php");
	}

function news_articles(){
	$back_news = new aboutus;//....................... to display articles in the db to the tables in the admin end
	$sagana = array();
	$data = $back_news->get_news();
	$sagana['news'] = $data['results'];
	
	require("templates/admin/messages.php");
}
	
	
//    DELETE FUNCTIONS	//	
function deletenews(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$newsid = isset($_GET['ID'])?$_GET['ID']:"";
	aboutus::deletenews($newsid);
	}
	
function delete_member(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$memberid = isset($_GET['id'])?$_GET['id']:"";
	members::delete_members($memberid);
	
	//require("templates/admin/settings.php");
	
	header('Location: admin.php?action=about');//.............MURANIS CODE
	}
	
function delete_administrator(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$adminid = isset($_GET['ID'])?$_GET['ID']:"";
	admin::delete_admin($adminid);
	
	require("templates/admin/home.php");
	}
	
//......................EDIT FUNCTIONS........................//	
	
function edit_staff(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$staffid = isset($_GET['id'])?$_GET['id']:"";
	$sagana_ = array();
	$sagana_['staff'] = members::edit_staff($staffid);
	
	require("templates/admin/edit_staff.php");

	}	

// EDITING THE ARTICLE
function edit_article(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$art_id = isset($_GET['ID'])?$_GET['ID']:"";
	$saga = array();
	$saga['news'] = aboutus::all_news($art_id);
	
	require("templates/admin/edit_article.php");
}
// EDIT ALL THE CMS CONTENT.....................................................

function mail_reader(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$art_id_x = isset($_GET['id'])?$_GET['id']:"";
	$saga_x = array();
	$saga_x['news_x'] = aboutus::all_content($art_id_x);
	
	require("templates/admin/read_mails.php");
}
// Edit about us pages here from backend..........................

function about_edit(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$art_id_xx = isset($_GET['id'])?$_GET['id']:"";
	$saga_xx = array();
	$saga_xx['news_xx'] = aboutus::all_content_xx($art_id_xx);
	
	require("templates/admin/about_nqcl_updates.php");
}

function article_changes(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$articles = new aboutus;
	$articles->storeValues($_POST);
	$articles->article_changes();
	
	header('Location: admin.php?action=messages');
}

// CMS CHANGES...............................................................

function cms_changes(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$articles = new aboutus;
	$articles->storeValues($_POST);
	$articles->cms_changes();
	
	header('Location:  http://'.$_SERVER['HTTP_HOST'].'/nqcl/admin.php?action=mails');
}
// ABout us page Changes
function cms_changes_2(){
	if(!isset($_SESSION['administrator'])) header("location:admin.php");
	$articles = new aboutus;
	$articles->storeValues($_POST);
	$articles->cms_changes_2();
	
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/nqcl/admin.php?action=mails');
}
	
// READ MAILS FUNCTIONS

// function mail_reader(){
// 	if(!isset($_SESSION['administrator'])) header("location:admin.php");
// 	$mailid = isset($_GET['id'])?$_GET['id']:"";
// 	$saga = array();
// 	$saga['emails'] = Utilities::all_mails($mailid);

// 	require("templates/admin/read_mails.php");
// 	}
function respond(){
	require("email.php");
}

?>
