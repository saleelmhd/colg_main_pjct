<?php
include 'connect.php';

$sql1=mysqli_query($con,"SELECT * FROM connector_tb");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['connector_type']=$rows['connector_type'];
        $myarray['power_capacity']=$rows['power_capacity'];
        $myarray['price']=$rows['price'];
        $myarray['connector_id']=$rows['connector_id'];
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>