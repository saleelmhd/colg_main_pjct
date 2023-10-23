<?php
include 'connect.php';
// $id = $_POST['id'];
$sql1=mysqli_query($con,"SELECT * FROM offer ");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['img']=$rows['image'];
      
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>