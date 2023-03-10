<?php
 session_start();
 include("../../include/config.php");
 include("../include/package_order.php");
 $yes = "";

 if(!isset($_SESSION['username']))
 {
     // not logged in
     header("location:../../admin.php");
     echo"<script>alert('This page is for admins only !')</script>";
     exit();
 }elseif(isset($_GET['logout'])){
  session_destroy();
     unset($_SESSION['username']);
     $code  = mt_rand(100000,999999);
     $update_code = "UPDATE security SET verification_code = $code";
     $run_code = mysqli_query($connect,$update_code);
     function getRealIpUs(){
          
      switch(true){
    
          case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
          case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
          case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
    
          default : return $_SERVER['REMOTE_ADDR'];
      }
    }
    $ip = getRealIpUs();
    $date12 = date("Y-m-d H:i:s A");
    $insert_feed2 = "INSERT INTO live_feed_admin (date,type,description,ip) VALUES('$date12','ADMIN LOG OUT','You Logged out of your admin page','$ip')";
    $run_feed2 =mysqli_query($connect,$insert_feed2);

    
   $yes = "
     <script type='text/javascript'>
 
 
 
     swal('LOGOUT!', 'You are logging out', 'warning');
   
   </script>";
     echo"
     <script>
 setTimeout(function(){
    window.location.href = '../../admin.php';
 }, 5000);
 </script>" ;
 }
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Admin page
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
      var counter = 0;

function moreFields() {
	counter++;
	var newFields = document.getElementById('readroot').cloneNode(true);
	newFields.id = '';
	newFields.style.display = 'block';
	var newField = newFields.childNodes;
	for (var i=0;i<newField.length;i++) {
		var theName = newField[i].name
		if (theName)
			newField[i].name = theName + counter;
	}
	var insertHere = document.getElementById('writeroot');
	insertHere.parentNode.insertBefore(newFields,insertHere);
}

window.onload = moreFields;
  </script>
</head>

<body class="">
<div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
             
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Admin Page
          </a>
        </div>
     <?php include "../include/left.php";?>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include "../include/top.php";?>
    
      <!-- End Navbar -->
     <div id="readroot" style="display:none;">

</div>
      <!-- div -- end -->
    <div class="content">
      <div class="wallet">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <h3>Package Order</h3>
                  </div>
                  <div class="col-lg-12">
                 <?php echo"$success";?>
                 <?php echo "$fail";?>
                  <div class="card">
                        <div class="card-body">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Order Date</label>
                                <input type="date" class="form-control" id="inputEmail4" name ="order_date" required>
                                </div>
                                <div class="form-group col-md-12">
                                <label for="inputPassword4">Delivery Date</label>
                                <input type="date" class="form-control" id="inputPassword4"  name="delivery_date" required >
                                </div>
                                
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Sent From</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Name of Sender" name="sent_from" required>
                                </div>
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Sent To</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Name of Receiver" name="sent_to" required>
                                </div>
                                <div class="form-group col-md-12">
                                <label for="inputPassword4">Email</label>
                                <input type="email" class="form-control" id="inputPassword4" placeholder="Enter Receipent Email" name="email" required>
                                </div>
                                <div class="form-group col-md-12">
                                <label for="inputPassword4">Destination</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Destination" name="destination" required>
                                </div>

</div>

                     
                        
                                <div class="form-row" >

<div class="form-group col-md-3">
<label for="inputPassword4">Product Name</label>
<input type="text" class="form-control" id="inputPassword4" placeholder="Product Name" name="product_name" required>
</div>
<div class="form-group col-md-3">
<label for="inputPassword4">Product Image</label>
<input type="text" class="form-control" id="inputPassword4" placeholder="Copy and paste product image address" name="product_img" required>
</div>

<div class="form-group col-md-3">
<label for="inputPassword4">Product Price</label>
<input type="number" class="form-control" id="inputPassword4" placeholder="Product Price" name="product_price" step=".01" required>
</div>
<div class="form-group col-md-3">
<label for="inputPassword4">Quantity</label>
<input type="number" class="form-control" id="inputPassword4" placeholder="Quantity" name="quantity" required>
</div>
<div class="form-group col-md-12">
<label for="inputPassword4">Status</label>
<select name="status" id="" class="form-control">
    <option value="Order Confirmed">Order Confirmed</option>
    <option value="Picked by Courier">Picked by Courier</option>
    <option value="On The Way">On The Way</option>
    <option value="Ready For Pickup">Ready For Pickup</option>
</select>
</div>


</div>
                     
                              
                                     


                                <button type="submit" class="btn btn-primary">Add Package</button>
                            
                            
                            
                            
                            </form>
                        </div>
                        </div>

                  <!-- end of form -->
                  <!-- start of form -->
                    <div class="container" id="change">
                        <div class="row">
                            
                            
                            </div>
                        </div>
                    </div>
                  <!-- end of form -->
              </div>
          </div>
      </div>
    
    </div>
    <!-- end of content section -->
    <?php include "../include/footer.php";?>
    </div>
  </div>
   <?php include('../include/side.php');?>
  <!--   Core JS Files   -->

  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
    <script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>