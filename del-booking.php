<?php
include 'connect.php';
$id=$_POST['id'];
$sql1=mysqli_query($con, "update bookings set status='1' where booking_id ='$id'");
$list=array();
if($sql1){
  
        $myarray['result']='Success';
    
}
else{
    $myarray['result']='failed';
  
}
echo json_encode($myarray);

?>