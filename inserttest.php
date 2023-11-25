<?php
if(isset($_POST["submit"]))
{
	$uname=$_POST["uname"];
	$password=$_POST["password"];
$conn=mysqli_connect("localhost","root","","kanpurfoods");
$query="insert into login(Username,Password) values('$uname','$password')";
$res=mysqli_query($conn,$query);
}
?>
<html>
<head>
<title>Insert</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
 Username <input type="text" name="uname"placeholder="Enter Username"><br>
 Password <input type="password" name="password" placeholder="Enter Password"><br>
 <input type="submit" name="submit" value="Submit">
</form>
</body>