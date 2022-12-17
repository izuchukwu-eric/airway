<?php
include("../../include/config.php");
date_default_timezone_set('Etc/UTC');




   
   
    
$success="";
$ip = "";
$browser_change = "";
$email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $ip= $_POST['ip'];
  $browser_change = $_POST['change'];
  $email = $_POST['email'];
 
 



  
  
 
  
  
       
        
      
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
  $insert_feed2 = "INSERT INTO live_feed_admin (date,type,description,ip) VALUES('$date12','SECURITY SETTINGS','You have changed your security settings','$ip')";
  $run_feed2 =mysqli_query($connect,$insert_feed2);
         
        $update_user = "UPDATE security SET id=1, ip_change ='$ip',  browser_change ='$browser_change' , email = '$email'";
        $run_user = mysqli_query($connect,$update_user);

        $success= "<div class='alert alert-dark'>
        <strong>Success</strong> Changes have set
      </div> ";
        
}




  

  




        
  

?>