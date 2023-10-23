<?php
include 'connect.php';
$sql=mysqli_query($con,"SELECT DISTINCT slot_tb.station_id,station_tb.name,station_tb.location FROM `slot_tb` inner JOIN station_tb on slot_tb.station_id=station_tb.login_id;");
$list=array();
if($sql->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql)){
        $myArray['result']='Success';
        $myArray['station_id']=$rows['station_id'];
        $myArray['name']=$rows['name'];
        $myArray['location']=$rows['location'];
        array_push($list,$myArray);
    }}
    else{
        $myArray['result']='failed';
        array_push($list,$myArray);
    }
    echo json_encode($list);
?>