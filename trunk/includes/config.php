<?php
	if (!defined('IN_COMMON'))	exit();	


	$dbserver	= 'localhost'; 				//database server
    $dbuser		= 'root';					// database user
	$dbpass		= '';						// database password
    $dbname		= 'kleeja'; 				// database name
	$dbprefix	= '';						// if you want to use perfix , fill it .. 
	$perpage	= '10';						// number of result in one page .. 

	
	//for integration with forums [ must change user systen from admin cp ] 
	$forum_srv = "localhost";				// forum database server
	$forum_user = "root";					// forum database user
	$forum_pass = "";						// forum database password
	$forum_db ="vb368";						// forum database name
	$forum_prefix = ""; 					//the perfix before name of tables
	$forum_path ="/vb"; 					// folder of forum
	
	
	//for use ftp account to uplaod [ under develpment ]
	$use_ftp = 0;							// 1 : yes / 0 : no 
	$ftp_server = "ftp.example.com";		// ...
	$ftp_user = "";							//
	$ftp_pass = "";							//
	
	
	
	// stop hook system if u need 
	//define('STOP_HOOKS', true);
	//
?>