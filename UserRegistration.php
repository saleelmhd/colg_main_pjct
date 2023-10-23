<?php
include 'connect.php';
$email=$_POST['email'];
$pass=$_POST['password'];
$type=$_POST['user_type'];
$name=$_POST['name'];
$place = $_POST['place'];
$mob=$_POST['mobile_no'];
$sql1=mysqli_query($con,"INSERT INTO login_tb(email,password,user_type)values('$email','$pass','$type')");
$userid=mysqli_insert_id($con);
$sql2=mysqli_query($con,"INSERT INTO user_register_tb(name,mobile_no,login_id,place) VALUES ('$name','$mob','$userid','$place')");
if($sql1 && $sql2){
    $my_array['result']="Success";
}
else{
    $my_array['result']="Failed";
}
 echo json_encode($my_array);

?>