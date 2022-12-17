<?php 
    include "include/config.php";
  
    

    if(!isset($_GET['tracking']))
    {
        // not logged in
        header("location:index.php?fail=none");
      
        exit();
    }else{
        $track_id = $_GET['tracking'];
        $get_track = "SELECT * FROM delivery where tracking_id = '$track_id'";
        $run_track = mysqli_query($connect,$get_track);
        $num_track = mysqli_num_rows($run_track);
        if($num_track == 0){
            header("location:index.php?fail=true");
        }else{
            $row_track = mysqli_fetch_array($run_track);
            $order_id = $row_track['order_id'];
            $tracking_id = $row_track['tracking_id'];
            $status = $row_track['status'];
            $order_date = $row_track['order_date'];
            $delivery_date =$row_track['delivery_date'];
            $sent_from = $row_track['sent_from'];
            $sent_to = $row_track['sent_to'];
            $email = $row_track['email'];
            $product_name = $row_track['product_name'];
            $product_price = $row_track['product_price'];
            $product_image = $row_track['product_image'];
            $quantity = $row_track['quantity'];
            $destination = $row_track['destination'];
            $total =  $product_price * $quantity;
            $active1 = $active2 = $active3 = $active4 = "";
            if($status == "Order Confirmed"){
                $active1 = "active";
                $active2 = "";
                $active3 = "";
                $active4 = "";
            }elseif($status == "Picked by Courier"){
                $active1 = "active";
                $active2 = "active";
                $active3 = "";
                $active4 = "";
            }elseif($status == "On The Way"){
                $active1 = "active";
                $active2 = "active";
                $active3 = "active";
                $active4 = "";
            }elseif($status == "Ready For Pickup"){
                $active1 = "active";
                $active2 = "active";
                $active3 = "active";
                $active4 = "active";
            }
        }
    }
?>
<!DOCTYPE  html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo"$site_name3";?></title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/976deefadf.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/tracking.css">
<script><?php echo"$chat";?></script>
    </head>
    <body>
        <div class="container">
            <p style="text-align:center;"><a href="index.php"><img src="images/logo.png" style="width:100%;" alt=""></a></p>
    <article class="card">
        <header class="card-header"> My Orders / Tracking </header>
        <div class="card-body">
            <h6>Order ID: <?php echo "$order_id";?></h6>
            <article class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-3"> <strong>Order time:</strong> <br> <?php echo "$order_date";?> </div>
                    <div class="col-lg-3"> <strong>Estimated Delivery time:</strong> <br> <?php echo "$delivery_date";?> </div>
                    <div class="col-lg-3"> <strong>Sent From:</strong> <br> <?php echo "$sent_from";?> </div>
                    <div class="col-lg-3"> <strong>Sent To:</strong> <br> <?php echo "$sent_to";?> </div>
                    </div>
<br><br>
                   <div class="row">
                   <div class="col-lg-3"> <strong>Email:</strong> <br> <?php echo "$email";?> </div>
                    <div class="col-lg-3"> <strong>Shipping BY:</strong> <br>  <?php echo "$site_name3";?>, | <i class="fa fa-phone"></i>  <?php echo "$phone123";?> </div>
                    <div class="col-lg-3"> <strong>Status:</strong> <br>  <?php echo "$status";?> </div>
                    <div class="col-lg-3"> <strong>Tracking #:</strong> <br>  <?php echo "$tracking_id";?> </div>
                   
                   </div>
                   <br><br>
                   <div class="row">
                   
                    <div class="col-lg-12"> <strong>Destination:</strong> <br>  <?php echo "$destination";?> </div>
                   </div>
                </div>
                
            </article>
            <div class="track">
                <div class="step <?php echo "$active1";?> "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order Confirmed</span> </div>
                <div class="step <?php echo "$active2";?>"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by Courier</span> </div>
                <div class="step <?php echo "$active3";?>"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On The Way </span> </div>
                <div class="step <?php echo "$active4";?>"> <span class="icon"> <i class="fa fa-envelope"></i> </span> <span class="text">Ready For Pickup</span> </div>
            </div>
            <br><br>
            <hr>
          
                <table class=" table table-responsive">
                    <tr>
                    <th>No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price(USD)</th>
                    <th>Total(USD)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><div class="aside"><img src="<?php echo "$product_image";?>" class="img-sm border"></div></td>
                        <td><?php echo "$product_name";?></td>
                        <td><?php echo "$quantity";?></td>
                        <td><?php echo "$$product_price";?></td>
                        <td><?php echo "$$total";?></td>
                    </tr>
                </table>
              
            
            <hr>
            <a href="index.php" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to homepage</a>
        </div>
    </article>
</div>
    </body>
</html>