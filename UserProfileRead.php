<?php
include 'connect.php';
$log_id=$_POST['login_id'];
$sql1=mysqli_query($con, "SELECT  user_register_tb.name,user_register_tb.mobile_no,login_tb.email,login_tb.password FROM user_register_tb INNER JOIN login_tb on login_tb.login_id=user_register_tb.login_id where user_register_tb.login_id='$log_id';");
$list=array();
if($sql1->num_rows>0){
    while($rows=mysqli_fetch_assoc($sql1)){
        $myarray['result']='Success';
        $myarray['name']=$rows['name'];
        $myarray['mobile_no']=$rows['mobile_no'];
        $myarray['email']=$rows['email'];
        $myarray['password']=$rows['password'];
        array_push($list,$myarray);
    }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);

?>