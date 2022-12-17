<?php
session_start();
include "config.php";
$success = $verify = $fail = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $verify = $_POST['verify'];
    $verify =  mysqli_real_escape_string($connect,$verify);
    $date12 = date("Y-m-d H:i:s A");
$get_verification = "SELECT verification_code from security";
$run_verification = mysqli_query($connect,$get_verification);
$row_verify = mysqli_fetch_array($run_verification);
$code = $row_verify['verification_code'];
function getRealIpUs(){
          
    switch(true){
  
        case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
  
        default : return $_SERVER['REMOTE_ADDR'];
    }
  }
  $ip = getRealIpUs();
if($verify == $code){
    $insert_feed2 = "INSERT INTO live_feed_admin (date,type,description,ip) VALUES('$date12','ADMIN LOGIN','A login has been made to the admin page','$ip')";
    $run_feed2 =mysqli_query($connect,$insert_feed2);
    $success = "
    <script type='text/javascript'>
    
    
    
      swal('Verification Complete!', 'You will enter your admin page shortly', 'success');
    
    </script>";
    echo"   
    <script>
    setTimeout(function(){
       window.location.href = 'admin/examples/live_feed.php';
    },5000)
    </script>
    ";
 
   
}else{
    $fail = "<div class='alert alert-info'>
    <strong>ERROR:</strong> Verification Code is Incorrect
  </div>";

}


}

?>