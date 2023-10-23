<?php
include 'connect.php';
$sql=mysqli_query($con, "SELECT * from station_tb where district='Malappuram'");
$list=array();
if($sql->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql)){
        $myArray['result']='Success';
        $myArray['station_id']=$rows['station_id'];
        $myArray['latitude']=$rows['latitude'];
        $myArray['longitude']=$rows['longitude'];
        array_push($list,$myArray);
    }}
    else{
        $myArray['result']='failed';
        array_push($list,$myArray);
    }
    echo json_encode($list);
?>