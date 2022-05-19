<?php 
include('../common.php');
$email = $_GET['email'];

$sql = "select email from member 
        where email = '$email'";

$result = $conn -> query($sql);

$data = mysqli_fetch_assoc($result);

if($data) {
    // 중복
    echo json_encode(array('result' => 'y'));
} else {
    // 중복이 아니다
    echo json_encode(array('result' => 'n'));
}

?>