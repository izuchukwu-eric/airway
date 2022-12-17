<?php
include("../../include/config.php");
$success = $id = $fail = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    function getRealIpUs(){
          
        switch(true){
      
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      
            default : return $_SERVER['REMOTE_ADDR'];
        }
      }
      $ip = getRealIpUs();
    $id = $_POST['id'];
    $date12 = date("Y-m-d H:i:s A");
    $delete_plan = "DELETE FROM delivery where id = $id";
    $run_plan = mysqli_query($connect,$delete_plan);
    $insert_feed1 = "INSERT INTO live_feed_admin (date,type,description,ip) VALUES('$date12','DELETE PACKAGE','A package was deleted','$ip')";
    $run_feed1 =mysqli_query($connect,$insert_feed1);
    $success = "
    <script type='text/javascript'>
    
    
    
      swal('PACKAGE DELETED!', 'Your package has been deleted successfully', 'success');
    
    </script>";
}


?>