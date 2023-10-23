<?php
include 'connect.php';
$id=$_POST['id'];
$sql1=mysqli_query($con, "SELECT  * from review_tb join user_register_tb on user_register_tb.login_id = review_tb.user_id where review_tb.station_id='$id';");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['comment']=$rows['comment'];
        $myarray['rating']=$rows['rating'];
        $myarray['name']=$rows['name'];
      
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>