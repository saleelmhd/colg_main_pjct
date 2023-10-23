<?php
include 'connect.php';
$id=$_POST['id'];
$sql1=mysqli_query($con, "SELECT  user_register_tb.name,bookings.date,bookings.time from bookings join user_register_tb on user_register_tb.login_id = bookings.user_id where bookings.station_id='$id';");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['name']=$rows['name'];
        $myarray['date']=$rows['date'];
        $myarray['time']=$rows['time'];
      
      
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>