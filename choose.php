<html>
<body>
<?php
  
	if ($_POST["check"] == "Password Box") {
		echo "Password Box";
      	}
	else if ($_POST["check"] == "Personal") {
		header("Location: Personal.php");
      	}
	else if ($_POST["check"] == "Professional") {
		echo "Professional";
      	}
	else if ($_POST["check"] == "E-commerce") {
		echo "E-commerce";
      	}
	else if ($_POST["check"] == "Internet of things") {
		echo "Internet of things";
      	}
	else if ($_POST["check"] == "Gossips") {
		echo "Gossips";
      	}
	else if ($_POST["check"] == "Reviews") {
		echo "Reviews";
      	}
	else if ($_POST["check"] == "Medical History") {
		echo "Medical History";
      	}
	else if ($_POST["check"] == "Talks and contacts") {
		echo "Talks and contacts";
      	}



?>

</body>
</html>