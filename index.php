<?php
$conn=mysqli_connect("localhost","root","","kanpurfoods");
$query="select * from dashboard";
$data=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
$(document).ready(function(){
$("#mymodal").modal('show');
});
</script>
<style>
    .modal-header
{
    background-image: linear-gradient(to right,#E74C3C,#EC7063);
}
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
.carousel-inner img
{
    height: 500px;
}
.foods
{
    height: 1000px;
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
<div id="mymodal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" style="color:#FDFEFE;">Welcome to the Kanpur Foods</h5>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body" style="background-image: linear-gradient(to right,#E74C3C,#EC7063); color:#FDFEFE;">
<p>Enjoy in your own restaurant Kanpur Foods, we hope you will find the food of this restaurant Healthy & Tasty .</p>
</div>
</div>
</div>
</div>
    <!-----------////HEADER////----------->
    <div class="top-header">
            <div class="container">
                <div class="left">
                    <img src="images/logo.png" style="height: 120px;">
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


    <!-----------////IMAGE SLIDER////----------->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slide1.jpg" alt="First Slide" width="100%" height=500px>
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.jpg" alt="Second Slide" width="100%" height=500px>
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" alt="Third Slide" width="100%" height=500px>
                </div>
                <div class="carousel-item">
                    <img src="images/slide4.jpg" alt="Fourth Slide" width="100%" height=500px>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    <!-----------//END IMAGE SLIDER//------------->


    <!-----------////DISPLAY FOODS////------------>
    <div class="foods">
        <h5 style="margin-left:550px; color: #E74C3C;">PASSION FOR FOOD</h5>
        <h1 style="color: #E74C3C; margin-left:538px;">OUR MENU</h1>
    <div class="container">
    <div class="row" style="margin-top: 50px;">
<?php while($row=mysqli_fetch_array($data)){  ?>
<div class="col-md-3">
<div class="card" style="width:250px">
		 <img src="<?php echo $row["Image"];?>"class="card-img-top" alt="" height="200px" width="300px">
		 <div class="card-body text-center">
		  <h5 class="card-title"><?php echo $row["Name"];?></h5>
		  <p class="card-text"><?php echo $row["Price"];?></p>
		 <a href="#" class="btn btn-primary">Order Now</a>
		 </div>
		 </div>
		 </div>
	  <?php } ?>
	  </div>
      </div>
    </div>
    <!-----------//END DISPLAY FOODS//----------->


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