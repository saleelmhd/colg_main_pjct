<?php
include 'connect.php';
$sid=$_POST['station_id'];
$uid=$_POST['user_id'];
$time=$_POST['timestamp'];
$rating=$_POST['rating'];
$comment=$_POST['comment'];
$sql=mysqli_query($con,"INSERT INTO review_tb (station_id,user_id,timestamp,rating,comment) VALUES ('$sid','$uid','$time','$rating','$comment')");
if ($sql) {
    $myarray['result']='success';
}
else
{
    $myarray['result']='failed';

}
echo json_encode($myarray);

?>