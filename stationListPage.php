<?php
include 'connect.php';
$sql=mysqli_query($con, "SELECT station_id, connector_type,power_capacity, COUNT(*) AS slot_count FROM slot_tb on station_id=18 GROUP by station_id,connector_type");
$list=array();
if($sql->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql)){
        $myArray['result']='Success';
        $myArray['station_id']=$rows['station_id'];
        $myArray['connector_type']=$rows['connector_type'];
        $myArray['power_capacity']=$rows['power_capacity'];
        array_push($list,$myArray);
    }}
    else{
        $myArray['result']='failed';
        array_push($list,$myArray);
    }
    echo json_encode($list);
?>