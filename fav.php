<?php
include 'connect.php';

$id =$_POST['uid'];

$sql1=mysqli_query($con, "SELECT  * FROM favourites join station_tb on station_tb.station_id = favourites.station_id where favourites.user_id='$id' ");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['name']=$rows['name'];
        $myarray['location']=$rows['place'];
        $myarray['fav_id']=$rows['fav_id'];
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>