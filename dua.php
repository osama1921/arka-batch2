<?php


//fungsi mengecek username
function is_username_valid($user){
	$username = $user;
	if (preg_match("/^[a-z]{1,}[a-z]{4,9}/", $username)) {
		return true;
	}
	else{
		return false;
	}
}

//fungsi menecek password
function is_password_valid($pass){
	$password = $pass;
	if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@!#$%\^&\*?><()'';:])(?=.{8,})/", $password)) {
		return true;
		
	}else{
		return false;
	}
}


// is_username_valid("cod3r");
// is_username_valid("siska");
// is_password_valid("p4sgW$");
// is_password_valid("codeYourFuture!123");
