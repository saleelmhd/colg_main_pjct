<?php
include 'connect.php';
$id=$_POST['id'];
$station_id = $_POST['station_id'];
$time = $_POST['time'];
$date = $_POST['date'];

$data = mysqli_query($con,"select * from bookings where time = '$time' and date= '$date' ");
if(mysqli_num_rows($data)>0){
    $myarray['result']='failed';
}
else{

    $sql1=mysqli_query($con, "insert into bookings(station_id,user_id,date,time)values('$station_id','$id','$date','$time')");

    if($sql1){
        $myarray['result']='Success';
    }
    else{
        $myarray['result']='Failed';
       
    }
}

echo json_encode($myarray);

?>