<?php
include 'connect.php';
$id = $_POST['id'];
$sql1=mysqli_query($con, "SELECT  * FROM bookings join station_tb on station_tb.station_id = bookings.station_id join login_tb on login_tb.login_id = bookings.user_id where bookings.status='1' and bookings.user_id ='$id'");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['booking_id']=$rows['booking_id'];
        $myarray['name']=$rows['name'];
        $myarray['location']=$rows['location'];
        $myarray['mobile_no']=$rows['mobile_no'];
        $myarray['time']=$rows['time'];
        $myarray['date']=$rows['date'];
        $myarray['status']=$rows['status'];
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>