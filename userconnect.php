<?php

session_start();

include 'database2.php';

if (!empty($_POST)) {
        // keep track validation errors
        $usernameError = null;
        $passwordError = null;
         
        // keep track post values
        $username = $_POST['username'];
        $password = $_POST['password'];

        $valid = true;

        if (empty($username)) {
            $usernameError = 'Please enter Name';
            $valid = false;
        }
         
        if (empty($password)) {
            $passwordError = 'Please enter password';
            $valid = false;
        }

	if ($valid) {
		try{
			$pdo = Database2::connect();
			$sql = "SELECT * FROM `users` WHERE username = '" . $username . "' AND password = '" . $password . "';";
			$q = $pdo->query($sql);
			Database2::disconnect();
		} catch (exception $e){
			var_dump($e->message);
		}
		
		$validCredentials = false;
		foreach  ($q as $row) {
			$id = $row['idUser'];
	        if(!empty($row['idUser'])){
	        	$validCredentials = true;
	        }
		}

		if($validCredentials){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header("Location: index.php");
		}
	}
}

?>