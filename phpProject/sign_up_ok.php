<?php 

include('common.php');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "insert into member set
        email = '$email',
        password = '$password'
        ";

$result = $conn -> query($sql);

if($result) {
    echo "
    <script>
        location.href='sign_in.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('회원가입에 실패했습니다.');
        location.back();
    </script>
    ";
}



?>