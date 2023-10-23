<?php
include 'connect.php';



$sql1=mysqli_query($con, "SELECT  * FROM vehicles where brand = 'Hyundai'");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['v_id']=$rows['v_id'];
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