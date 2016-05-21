<html>
<style>

div{
position :relative;
color: MidnightBlue;
top:200px;
left:60%;
font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
font-size: 18px;
font-style: normal;
font-variant: normal;
font-weight: 400;
line-height: 20px;
}


.text-line {
    background-color: transparent;
    color: black;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid lightblue 1px;
    padding: 2px 10px;
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
  background-image : url("first.jpg");
  -webkit-transform: rotate(-10deg); 
  position: fixed;
  background-size: 510px 280px;
  background-repeat: no-repeat;
  top: 17%;
  bottom: 40%;
  left: 10%;
  right: 30%;
  z-index: -1;
}
#x{
position:fixed;
background-size: 30px 10px;
  background-repeat: no-repeat;
  top: 0%;
  bottom: 60%;
  left:85%;
  right: -30%;
}
form input[type="submit"] {
    background: none;
    border: none;
    color: MidnightBlue;
    cursor: pointer;
    font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
	font-size: 18px;
	font-style: normal;
}
</style>
<body>
<form action="check.php" method="post"  name="f1">
<div>
&nbsp;Username <input type="text" name = "uname" class="text-line" /><br><br>
&nbsp;Password <input type="password" name = "pass" class="text-line" /><br><br><br>
<input type="submit" value="Sign up" name="check"/>
<input type="submit" value="Login" name="check"/>
<input type="submit" value="Help?" name="check"/>
</div>

<div id="bg-bottom"></div>
<div id="bg-left"></div>
<div id="x"><img src="LOGO.jpg" style="width: 20%; height:40%"/></div>

</form>
</body>

</html>


