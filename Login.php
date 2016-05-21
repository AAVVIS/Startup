<style>
div{
position :relative;
color: MidnightBlue;
top:270px;
left:4%;
font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
font-size: 18px;
font-style: normal;
font-variant: normal;
font-weight: 400;
line-height: 20px;
}

p1{
position :fixed;
color: MidnightBlue;
top:20%;
left:5%;
font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
font-size: 18px;
font-style: normal;
font-variant: normal;
font-weight: 400;
line-height: 20px;
}

p2{
position :fixed;
color: MidnightBlue;
top:35%;
left:5%;
font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
font-size: 18px;
font-style: normal;
font-variant: normal;
font-weight: 400;
line-height: 20px;
}


#bg-bottom {
  background-color: MidnightBlue;
  position: fixed;
  top: 90%;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: -1;
}
#bg-left {
  background-image : url("Passwordbox.jpg");
  -webkit-transform: rotate(0deg); 
  position: fixed;
  background-size: 80px 60px;
  background-repeat: no-repeat;
  top: 40%;
  bottom: 0%;
  left: 5%;
  right: 30%;
  z-index: -1;
}
#x{
position:fixed;
background-size: 30px 10px;
  background-repeat: no-repeat;
  top: -4%;
  bottom: 45%;
  left:2%;
  right: 30%;
}
form input[type="submit"] {
    background: none;
    border: none;
    color: MidnightBlue;
    cursor: pointer;
    font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
	font-size: 13px;
	font-style: normal;
}

img.logo
{
display:inline-block;
margin-left:auto;
margin-right:auto;
width:100px;
height:90px;
}
</style>
<?php
session_start();
$hostname = "localhost"; // usually is localhost
$db_user = "root"; // change to your database password
$db_password = "Pass0013"; // change to your database password
$database = "myid"; // provide your database name
$db_table = "contact"; // your database table name
$db = mysqli_connect($hostname,$db_user,$db_password,$database);
$sql = "SELECT id,firstname FROM contact WHERE email = '{$_SESSION["username"]}'";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["firstname"] = $row["firstname"];
}
?>

<html>
<body>

<div id="twoimages">

<img class="logo" src="Passwordbox.jpg" alt="">
<img class="logo" src="Personal.jpg" alt="">
<img class="logo" src="Professional.jpg" alt="">
<img class="logo" src="e-commerce.jpg" alt="">
<img class="logo" src="IOT.jpg" alt="">
<img class="logo" src="Gossip.jpg" alt="">
<img class="logo" src="Review.jpg" alt="">
<img class="logo" src="Medical.jpg" alt="">
<img class="logo" src="Talks.jpg" alt="">
</div>

<form action="choose.php" method="post" name="f2">
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <p1>Welcome <?php echo $_SESSION["firstname"] ?></p1><br><br>
    </body>
</html>
<p2>What do you want to do today?</p2>
<div id="bg-bottom"></div>
<div id="x"><img src="LOGO.jpg" style="width: 20%; height:40%"/></div>
<div>
<input type="submit" value="Password Box" name="check"/>&nbsp;&nbsp;
<input type="submit" value="Personal" name="check"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Professional" name="check"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="E-commerce" name="check"/>&nbsp;
<input type="submit" value="Internet of things" name="check"/>&nbsp;&nbsp;
<input type="submit" value="Gossips" name="check"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Reviews" name="check"/>&nbsp;
<input type="submit" value="Medical History" name="check"/>
<input type="submit" value="Talks and contacts" name="check"/>
</div>
</form>
</body>
</html>