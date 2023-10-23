<?php
include 'connect.php';
$id=$_POST['sid'];
$sql1=mysqli_query($con, "SELECT  *  FROM station_tb where station_id='$id';");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['name']=$rows['name'];
        $myarray['station_id']=$rows['station_id'];
      
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>