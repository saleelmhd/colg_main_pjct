<?php
include 'connect.php';
$id=$_POST['login_id'];
$name=$_POST['name'];
$email=$_POST['email'];
// $pass=$_POST['password'];
$mob=$_POST['mobile_no'];
// $loc=$_POST['location'];
// $lat=$_POST['lattitude'];
// $lon=$_POST['longitude'];

$sql1=mysqli_query($con,"UPDATE  login_tb set email='$email' where login_id='$id'");
$sql2=mysqli_query($con, "UPDATE station_tb set name='$name',mobile_no='$mob' where login_id='$id'");
if($sql1 && $sql2){
    $myArray['result']='Success';
}
else{
    $myArray['result']='Failed';
}
echo json_encode($myArray);
?>