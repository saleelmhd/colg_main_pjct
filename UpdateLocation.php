<?php
include 'connect.php';
$place=$_POST['place'];
$loc=$_POST['location'];
$lat=$_POST['lattitude'];
$long=$_POST['longitude'];
$id=$_POST['login_id'];
$sql2=mysqli_query($con,"UPDATE station_tb set location='$loc',place='$place',lattitude='$lat',longitude='$long' WHERE login_id='$id'");
if( $sql2){
    $myarray['result']='Success';
}
else{
    $myarray['result']='Failed';
}
echo json_encode($myarray);
?>