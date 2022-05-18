<?php 
include('common.php');

$email = $_POST['email'];
$password = $_POST['password'];

// 사용자가 입력한 이메일에 해당하는 쿼리
$sql = "select no, email, password from member
        where email = '$email'";

$result = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($result);

// 쿼리에 대한 return값이 있다면
if($db_pw) {
    // 세션에 값을 저장한다.
    $_SESSION['no'] = $db_pw['no'];
    $_SESSION['email'] = $db_pw['email']; 
    echo "
    <script>
        location.href='index.php'
    </script>
    ";   
} else {
    echo "
    <script>
        location.back()
    </script>
    ";   
}


?>