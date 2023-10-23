<?php
include 'connect.php';
$email=$_POST['email'];
$pass=$_POST['password'];
$type=$_POST['user_type'];
$name=$_POST['name'];
$mob=$_POST['mobile_no'];
$place=$_POST['place'];
$lat=$_POST['latitude'];
$long = $_POST['longitude'];
$sql1=mysqli_query($con,"INSERT INTO login_tb(email,password,user_type)values('$email','$pass','$type')");
$userid=mysqli_insert_id($con);
$sql2=mysqli_query($con,"INSERT INTO station_tb(name,mobile_no,login_id,place,latitude,longitude) VALUES ('$name','$mob','$userid','$place','$lat','$long')");
if($sql1 && $sql2){
    $my_array['result']="Success";
}
else{
    $my_array['result']="Failed";
}
 echo json_encode($my_array);

?>