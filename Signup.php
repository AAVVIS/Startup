<html>
<body>
<?php
$hostname = "localhost"; // usually is localhost
$db_user = "root"; // change to your database password
$db_password = "Pass0013"; // change to your database password
$database = "myid"; // provide your database name
$db_table = "contact"; // your database table name
$db = mysqli_connect($hostname,$db_user,$db_password,$database);
$fname = $_GET["fn"];
$lname = $_GET["ln"];
$email = $_GET["em"];
$password = $_GET["pwd"];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else
{
echo "yeah";
}
mysqli_query($db,"INSERT INTO contact VALUES ('$_POST[id]','{$fname}','{$lname}','{$email}','{$password}')");
header("Location: index.php");	
?>
</body>
</html>