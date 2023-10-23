<?php
include 'connect.php';
$id=$_POST['id'];
$station_id = $_POST['station_id'];
$sql1=mysqli_query($con, "insert into favourites(station_id,user_id)values('$station_id','$id')");

if($sql1){
    $myarray['result']='Success';
}
else{
    $myarray['result']='failed';
   
}
echo json_encode($myarray);

?>