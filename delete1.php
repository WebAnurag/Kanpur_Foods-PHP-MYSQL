<?php
$conn=mysqli_connect("localhost","root","","kanpurfoods");
$Name=$_GET["id"];
$query="delete from dashboard where Name='$Name'";
$data=mysqli_query($conn,$query);
header('location:delete.php')
?>