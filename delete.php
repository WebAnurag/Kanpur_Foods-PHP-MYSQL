<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","kanpurfoods");
$query="select * from dashboard";
$data=mysqli_query($conn,$query);
echo "<table border=2 cellpadding=10 align='center' class='table table-striped'><tr><th>Name</th><th>Image</th><th>Price</th><th>Action</th></tr>";
while($row=mysqli_fetch_array($data))
{
    echo "<tr>";
    echo "<td>".$row["Name"]."</td><td>".$row["Image"]."</td><td>".$row["Price"]."</td><td><a href='delete1.php ?id=$row[Name]' class='btn btn-danger'>Delete</a></tr>";
}
?>
</body>
</html>