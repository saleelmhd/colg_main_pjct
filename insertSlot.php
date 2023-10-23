<?php
include 'connect.php';
$station_id=$_POST['station_id'];

$id=$_POST['connector_id'];

$sql=mysqli_query($con, "INSERT INTO slot_tb (connector_id,station_id) values
 ('$id','$station_id')");

if($sql){
    $myarray['result']='Success';
}
else{
    $myarray['result']='Failed';
}
echo json_encode($myarray);

?>