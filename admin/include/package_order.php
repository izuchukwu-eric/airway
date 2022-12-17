<?php
include("../../include/config.php");
date_default_timezone_set('Etc/UTC');




   
   
   $order_date = $delivery_date = $destination = $status = $sent_from = $sent_to = $email = $product_name = $product_image = 
   $product_price = $quantity = $success = $fail="";



if ($_SERVER["REQUEST_METHOD"] == "POST"){
$order_date = $_POST['order_date'];
$delivery_date = $_POST['delivery_date'];
$destination = $_POST['destination'];
$status = $_POST['status'];
$sent_from = $_POST['sent_from'];
$sent_to = $_POST['sent_to'];
$email = $_POST['email'];
$product_name = $_POST['product_name'];
$product_image = $_POST['product_img'];
$product_price = $_POST['product_price'];
$quantity  = $_POST['quantity'];
$part_one = mt_rand(1,10);
$part_two = mt_rand(1000,10000);
function random_strings($length_of_string){

// String of all alphanumeric character
$str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

return substr(str_shuffle($str_result),
                   0, $length_of_string);
                }

$part_three = random_strings(4);
$part_four = "-";

$order_id = $part_one.$part_four.$part_two.$part_three;

$part_five = mt_rand(1,30);
$part_six = mt_rand(1000,100000);
$part_seven = random_strings(8);
$part_eight = "-";

$tracking_id = $part_five.$part_eight.$part_six.$part_seven;

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
 $insert_feed2 = "INSERT INTO live_feed_admin (date,type,description,ip) VALUES('$date12','ADD PACKAGE','A package was added','$ip')";
 $run_feed2 =mysqli_query($connect,$insert_feed2);
 
$insert_package ="INSERT INTO delivery (order_date,status,tracking_id,order_id,sent_from,sent_to,email,product_name,product_price,product_image,delivery_date,quantity,destination)
 VALUES('$order_date','$status','$tracking_id','$order_id','$sent_from','$sent_to','$email','$product_name','$product_price','$product_image','$delivery_date','$quantity','$destination') ";
 $run_package = mysqli_query($connect,$insert_package);
 $success = "
 <script type='text/javascript'>
 
 
 
   swal('PACKAGE ADDED!', 'Your package has been added successfully        Tracking Id : $tracking_id', 'success');
 
 </script>";
        
}




  

  




        
  

?>