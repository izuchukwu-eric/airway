<?php
$track = "";
if(isset($_GET['tracking'])){
    $track = $_GET['tracking'];
    
 echo"    <script>
 setTimeout(function(){
    window.location.href = 'tracking.php?tracking=$track';
 });
</script>";
   
}
?>