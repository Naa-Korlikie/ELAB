<?php
//start session
session_start(); 

//for header redirection
ob_start();

//function to check for role (admin, customer, etc)
function LOGGED_IN(){
	if(isset($_SESSION['cid'])){
		return true;
		//echo $_SESSION['cid'];

	}else{
		return false;
	}
	
}


//function to get user ID


//function to check for role (admin, customer, etc)

?>