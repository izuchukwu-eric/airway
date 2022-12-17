<?php
include("../../include/config.php");
date_default_timezone_set('Etc/UTC');




   
   
    

$order_id = $tracking_id = $order_date = $delivery_date = $destination = $status = $sent_from = $sent_to = $email = $product_name = $product_image = 
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
    $product_image = $_POST['product_image'];
    $product_price = $_POST['product_price'];
    $quantity  = $_POST['quantity'];
    $order_id = $_POST['order_id'];
    $tracking_id = $_POST['tracking_id'];
    $id = $_POST['id'];


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
 
  $insert_feed1 = "INSERT INTO live_feed_admin (date,type,description,ip) VALUES('$date12','EDIT PACKAGE','A package was editted','$ip')";
    $run_feed1 =mysqli_query($connect,$insert_feed1);
        $update_user = "UPDATE delivery SET  order_date ='$order_date', status ='$status' , tracking_id = '$tracking_id', 
        order_id = '$order_id' , sent_from = '$sent_from' , sent_to = '$sent_to' , email = '$email' ,
         product_name = '$product_name' , product_price = '$product_price' , product_image = '$product_image' , 
         delivery_date = '$delivery_date' , quantity = '$quantity' , destination = '$destination' where id = $id ";
        $run_user = mysqli_query($connect,$update_user);
        $success = "
        <script type='text/javascript'>
        
        
        
          swal('PACKAGE EDITTED!', 'Your package has been editted successfully', 'success');
        
        </script>";
        
}




  

  




        
  

?>