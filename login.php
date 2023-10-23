<?php
include 'connect.php';
$email=$_POST['email'];
$pass=$_POST['password'];
$type=$_POST['user_type'];

$sql=mysqli_query($con, "SELECT * FROM login_tb where email='$email'and password='$pass'and user_type='$type'");
if($sql->num_rows>0){
    while($row=mysqli_fetch_assoc($sql)){
        $myarray['result']='User successfully login';
        $myarray['log_id']=$row['login_id'];

    }

}
else{
    $myarray['result']='Failed';
}
echo json_encode($myarray);
?>