<?php 
include('../common.php');
$email = $_GET['email'];

$sql = "select * from member 
        where email = '$email'";

$result = $conn -> query($sql);

$data = mysqli_fetch_assoc($result);

echo json_encode($data);
?>