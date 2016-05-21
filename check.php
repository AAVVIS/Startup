<html>
<body>
<?php
  
	if ($_POST["check"] == "Sign up") {
		header("Location: Signup.html");
      	}
	else if (($_POST["check"] == "Login" && $_POST["uname"] == "" && $_POST["pass"] == "") || ($_POST["check"] == "Login" && $_POST["uname"] == "") || ($_POST["check"] == "Login" && $_POST["pass"] == "") ){
		header("Location: index.php");	
	}
	else if($_POST["check"] == "Login"){
		
		session_start();
		$_SESSION["username"] = "{$_POST["uname"]}";
		$_SESSION["password"] = "{$_POST["pass"]}";
		header("Location: Authentication.php");
	
			}
	else if ($_POST["check"] == "Help?"){
		echo "help";
	}
?>

</body>
</html>