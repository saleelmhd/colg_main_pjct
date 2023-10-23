<?php
include 'connect.php';

$log = $_POST['id']; 


$image = $_FILES['pic']['name'];
    if ($image != "") {
        $filearray = pathinfo($_FILES['pic']['name']);
        // var_dump($filearray);exit();

        $file = rand();
        $file_ext = $filearray["extension"];




        $filenew = $file . "." . $file_ext;
        // var_dump($filenew);exit();
        move_uploaded_file($_FILES['pic']['tmp_name'], "image/" . $filenew);
        //var_dump($filenew);exit();
    }


$sql = mysqli_query($con,"INSERT INTO offer(station_log_id,image)values('$log','$filenew')");
  
if ($sql) {

    $myarray['message'] = 'added';

} else {

  $myarray['message'] = 'failed';
}
echo json_encode($myarray);

?>