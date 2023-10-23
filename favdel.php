<?php
include 'connect.php';

$id =$_POST['id'];

$sql1=mysqli_query($con, "delete from favourites where fav_id = '$id'");

if($sql1){
   
        $myarray['result']='Success';

    
}
else{
    $myarray['result']='failed';

}
echo json_encode($myarray);

?>