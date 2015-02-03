<?php
	if (isset($_COOKIE["mah_login"])){
		setcookie('mah_login', null, -1);
	}
	header("Location: index.php");
