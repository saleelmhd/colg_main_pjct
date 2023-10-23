<?php
include 'connect.php';
$id=$_POST['id'];

$sql1=mysqli_query($con, "select * from myvehicle join vehicles on myvehicle.v_id = vehicles.v_id where myvehicle.user_log_id = '$id'");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['name']=$rows['name'];
        $myarray['brand']=$rows['brand'];
        $myarray['image']=$rows['image'];
      
      
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);


?>