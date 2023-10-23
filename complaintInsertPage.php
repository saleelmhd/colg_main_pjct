<?php
include 'connect.php';
$stn_id=$_POST['station_id'];
$user_id=$_POST['user_id'];
$type=$_POST['complaint_type'];
$Otype=$_POST['other_complaints'];
$des=$_POST['description'];
$date=$_POST['date'];
$sql=mysqli_query($con,"INSERT into complaint_tb(station_id,user_id,complain_type,description,date,other_complaints) values
('$stn_id','$user_id','$type','$des','$date','$Otype') ");
if($sql){
    $myarray['result']='Success';
}
else{
    $myarray['result']='Failed';
}
echo json_encode($myarray);
?>