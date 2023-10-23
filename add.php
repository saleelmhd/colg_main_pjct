<?php
include 'connect.php';
$id=$_POST['id'];
$v_id=$_POST['v_id'];
$sql1=mysqli_query($con, "insert into myvehicle(v_id,user_log_id)values('$v_id','$id')");

if($sql1){
    $myarray['result']='Success';
}
else{
    $myarray['result']='failed';
   
}
echo json_encode($myarray);

?>