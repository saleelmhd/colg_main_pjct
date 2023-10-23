<?php
include 'connect.php';
$id=$_POST['id'];
$sid = $_POST['sid'];
$type = $_POST['type'];
$complaint = $_POST['complaint'];
$sql1=mysqli_query($con, "insert into complaint_tb(station_id,user_id,complain_type,description)values('$sid','$id','$type','$complaint')");

if($sql1){
    $myarray['result']='Success';
}
else{
    $myarray['result']='failed';
   
}
echo json_encode($myarray);

?>