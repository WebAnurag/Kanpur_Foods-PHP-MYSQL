<?php
$conn=mysqli_connect("localhost","root","","kanpurfoods");
$query="select * from dashboard";
$data=mysqli_query($conn,$query);
?>

<div class="row">
            <?php while($row=mysqli_fetch_array($data)){?>
                <div class="col-md-3">
                    <div class="card" style="width: 250px;">
                    <img src="<?php echo $row['Image'];?>" class="card-img-top" alt="..." height=200px>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row['Name']; ?></h5>
                        <h5 class="card-title"><?php echo $row['Price']; ?></h5>
                        <a href="#" class="btn btn-primary stretched-link">Order Now</a>
                    </div>
                    </div>
                </div>
        <?php } ?>
        </div>