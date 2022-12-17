<?php include "include/verify_process.php";?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo "$site_name3";?> Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/favicon.png" />

<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<script> <?php echo"$chat";?></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Admin Verification</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
            <a href="index.php" ><img src="images/logo.png" alt="<?php echo"$site_name3";?>" title="" class="img-fluid auth__logo" /></a>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <?php echo"$fail";?>
                                            
					<input class="text email" type="text" name="verify" placeholder="Verification Code" required>
              
		
					<div class="wthree-text">
					
						<div class="clear"> </div>
					</div>
					<input type="submit" value="Verify">
				</form>
          
              
			</div>
		</div>
		<!-- copyright -->
	
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
    <?php echo "$success";?>



<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>