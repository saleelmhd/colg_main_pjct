<?php
include 'connect.php';
$id=$_POST['id'];
$sql1=mysqli_query($con, "SELECT  *  FROM station_tb INNER JOIN login_tb on login_tb.login_id=station_tb.login_id where station_tb.station_id='$id';");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['name']=$rows['name'];
        $myarray['station_id']=$rows['station_id'];
        $myarray['login_id']=$rows['login_id'];
        $myarray['mobile_no']=$rows['mobile_no'];
        $myarray['email']=$rows['email'];
        $myarray['location']=$rows['location'];
        $myarray['password']=$rows['password'];
        $myarray['place']=$rows['place'];
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>