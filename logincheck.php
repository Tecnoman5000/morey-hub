<?php
  require 'conn.php';
  global $loggedin;
  if (isset($_COOKIE["mah_login"])){
	$login_result = mysqli_query($con,"SELECT * FROM users");
	while($login_row = mysqli_fetch_array($login_result)) {
	  $sig = hash_hmac('sha256', $login_row['id'], $login_row['password']);
	  if($sig == $_COOKIE["mah_login"]){
		$loggedin = true;
		break; 
	  }
	}		
  } else {
	$loggedin = false;
  }
