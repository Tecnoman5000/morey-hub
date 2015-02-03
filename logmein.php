<?php		

    $logingood = false;
    include 'logincheck.php';
    include 'conn.php';
	
	$timeout = 60*60*6;
	
    if(!$loggedin){
        if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result = mysqli_query($con,"SELECT * FROM users");
        while($row = mysqli_fetch_array($result)) {
                if(($_POST['user'] == $row['user']) && ($_POST['pass'] == $row['password'])){
                        $logingood = true;
			$password = $row['password'];
                        $id = $row['id'];
                        break; 
                }
        }
        if($logingood){	  		  
          $sig = hash_hmac('sha256', $id, $password);
          setcookie("mah_login", $sig, time()+ $timeout);
          header("Location: index.php");
        }else{
          header("Location: login.php");
          echo 'failure!';
        }
        mysqli_close($con);
    }else{
        //echo 'What\'re you trying to do mate? I\'ll sock ya mum.<br />Try <a href="common.php?logout=1">logging out</a> first...';
        header("Location: index.php");
    }
