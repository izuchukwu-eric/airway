<?php 

 $connect = mysqli_connect("localhost","root","","delivery");
 #$connect = mysqli_connect("localhost","u562532494_airway","X9m~~HKOn1X*","u562532494_airway");
 $get_settings1 = "select * from settings";
$run_settings1 = mysqli_query($connect,$get_settings1);
$row_settings1 = mysqli_fetch_array($run_settings1);
$email_admin1 = $row_settings1['email'];
$password_admin1 = $row_settings1['password'];
$chat = $row_settings1['smartupps'];
$site_name3 = $row_settings1['site_name'];
$location123 = $row_settings1['location2'];
$site_link123 = $row_settings1['site_link'];
$telegram123 = $row_settings1['telegram'];
$whatsapp123 = $row_settings1['whatsapp'];
$phone123 = $row_settings1['phone'];
$ssl = "ssl";
$port = 465;
$host = "smtp.titan.email";
$url = "https://";   
    $url.= $_SERVER['HTTP_HOST'];  
    $url.= $_SERVER['REQUEST_URI']; 
?>