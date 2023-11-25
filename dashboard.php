<?php
SESSION_Start();
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$price=$_POST["price"];
	if($_FILES['f1']['name'])
	{
		$target="images/" .$_FILES['f1']['name'];
		move_uploaded_file($_FILES['f1']['tmp_name'], "images/" . $_FILES['f1']['name']);
	}
	$conn=mysqli_connect("localhost","root","","kanpurfoods");
	$query="insert into dashboard(Name,Price,Image) values('$name',$price,'$target')";
	$res=mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .top-header
{
    background-image: linear-gradient(to right,#E74C3C,#EC7063);
    height: 120px;
}
.left
{
    float: left;
            
}
.nav
{
    float: right;
    padding-top: 35px;
}
img
{
    height: 120px;
}
    h1
    {
        color: #3498DB;
        display: grid;
        place-items: center;
    }
    .form-group
    {
        width: 400px;
    }
    .form
    {
        display: grid;
        place-items: center;
    }
    .footer
{
    background-image: linear-gradient(to right,#E74C3C,#EC7063);
    height: 300px;

}
.fleft
{
    height:200px;
    width: 300px;
    float: left;
    padding-top: 50px;
}
.fright
{
    height: 200px;
    width: 300px;
    float: right;
    padding-top: 50px;
}
.bottom
{
    background-image: linear-gradient(to right,#E74C3C,#EC7063);
    height: 80px;
    display: grid;
    place-items: center;
    border-top: 1px solid #c4c0c0;
}
</style>
</head>
<body>
    <!-----------////HEADER////----------->
    <div class="top-header">
            <div class="container">
                <div class="left">
                    <img src="images/logo.png">
                </div>
                <nav class="nav">
                    <a href="index.php" class="nav-item nav-link" style="color:#FDFEFE;"><b>Home</b></a>
                    <a href="#" class="nav-item nav-link" style="color:#FDFEFE;"><b>About-Us</b></a>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#FDFEFE;"><b>Login</b></a>
                        <div class="dropdown-menu">
                            <a href="customer.php" class="dropdown-item" style="color:#3498DB ;"><b>Customer</b></a>
                            <a href="restaurant.php" class="dropdown-item" style="color:#3498DB ;"><b>Restaurant</b></a>
                        </div>
                </nav>
                </div>
            </div>
        </div>
        <!-----------//END HEADER//------------>


    <!--------------////FORM////--------------->
    <h1>Restaurant Dashboard</h1>
    <br>
    <button type="button" class="btn btn-primary">Add Food</button>
    <button type="button" class="btn btn-primary">View Orders</button>
    <a href="delete1.php"><button type="button" class="btn btn-primary">Delete Food</button></a>
  <div class="form">
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            Name <input type="text" name="name" class="form-control" placeholder="Enter Food Name">
        </div>
        <div class="form-group">
            Price <input type="text" name="price" class="form-control" placeholder="Enter Food Price">
        </div>
        <div class="form-group">
            Image <input type="file" name="f1" class="form-control">
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="Submit">
    </form>
  </div>
    <!-------------//END FORM//--------------->

    <!---------------FOOTER--------------->
    <footer class="footer">
        <div class="container">
            <div class="fleft">
                <h2 style="color:#FDFEFE;">Newsletter</h2>
                <p style="font-weight: bold;color:#FDFEFE;">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <input type="text" placeholder="Your Mail">
                <button type="button" class="btn btn-success" style="height:40px;">Sign Up</button>
            </div>
            <div class="fright">
                <h2 style="color:#FDFEFE;">Contact</h2>
                <i class="fa fa-map-marker" aria-hidden="true" style="color: #FDFEFE;"><b>123 Street,Kanpur,Uttar Pradesh</b></i><br>
                <i class="fa fa-phone" aria-hidden="true" style="color: #FDFEFE;"><b>+91-7007048715</b></i><br>
                <i class="fa fa-envelope-o" aria-hidden="true" style="color: #FDFEFE;"><b>kanpurfoods@gmail.com</b></i><br>
            <div class="container" style="height: 50px; margin-top: 10px;">
            <i class="fa fa-twitter-square" aria-hidden="true" style="color: #FDFEFE; font-size: 30px; margin-right: 10px; padding-left: 50px;"></i>
            <i class="fa fa-facebook-square" aria-hidden="true" style="color: #FDFEFE; font-size: 30px; margin-right: 10px;"></i>
            <i class="fa fa-youtube-square" aria-hidden="true" style="color: #FDFEFE; font-size: 30px; margin-right: 10px;"></i>
            <i class="fa fa-linkedin-square" aria-hidden="true" style="color: #FDFEFE; font-size: 30px; margin-right: 10px;"></i>
            </div>
            </div>
        </div>
    </footer>
            <div class="bottom">
                <h4 style="color: #FDFEFE;">All Right Reserve &copy; Kanpur Foods 2023</h4>
            </div>
    <!------------//END FOOTER//--------------->
</body>
</html>