<?php
include("../../include/config.php");
date_default_timezone_set('Etc/UTC');




   
   
    

$success = $phone2 = $location2 = $email2 = $password4 = $admin_username1 = $admin_password2 ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $phone2= $_POST['phone'];
  $location2 = $_POST['location'];
  $email2 = $_POST['email'];
  $password4 = $_POST['password'];
  $admin_username1 = $_POST['admin_username'];
  $admin_password2 = $_POST['admin_password'];
  $site_name1  = $_POST['site_name'];
  $smartupps1 = $_POST['smartupps'];
  $smartupps1 = mysqli_real_escape_string($connect,$smartupps1);


  $get_set = "select * from settings";
  $run_set = mysqli_query($connect,$get_set);
  $row_set = mysqli_fetch_array($run_set);
  $pho = $row_set['phone'];
  $local = $row_set['location2'];
  $ema = $row_set['email'];
  $admin_use = $row_set['admin_username'];
  $admin_pass = $row_set['admin_password'];
  $pass = $row_set['password'];
  $site = $row_set['site_name'];
  $smart = $row_set['smartupps'];

  if(!isset($phone2)){
    $phone2 = $pho;
  }elseif(!isset($location2)){
    $location2 = $local;
  }elseif(!isset($email2)){
    $email2  = $ema;
  }elseif(!isset($password4)){
    $password4 = $pass;
  }elseif(!isset($admin_username1)){
    $admin_username1 = $admin_use;
  }elseif(!isset($admin_password2)){
    $admin_password2 = $admin_pass;
  }
  elseif(!isset($site_name1)){
    $site_name1 = $site;
  }
  elseif(!isset($smartupps1)){
    $smartupps1 = $smart;
  } 



  
  
 
  
  
       
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
  $insert_feed2 = "INSERT INTO live_feed_admin (date,type,description,ip) VALUES('$date12','SITE CHANGE','You have changed your settings','$ip')";
  $run_feed2 =mysqli_query($connect,$insert_feed2);
      
         
         
        $update_user = "UPDATE settings SET  location2 ='$location2',  phone ='$phone2' ,email = '$email2' ,  password = '$password4',admin_username = '$admin_username1', admin_password = '$admin_password2', site_name ='$site_name1',smartupps = '$smartupps1'";
        $run_user = mysqli_query($connect,$update_user);
        $success= "<div class='alert alert-dark'>
<strong>Success</strong> Settings Changed
</div> ";
        
}




  

  




        
  

?>