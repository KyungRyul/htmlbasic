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
// 이메일이 존재한다면
if($db_pw) {
    // 입력pw == dbpw 이면
    if($password == $db_pw['password']) {
        // 세션에 값을 저장한다.
        $_SESSION['no'] = $db_pw['no'];
        $_SESSION['pw'] = $db_pw['password'];
        $_SESSION['email'] = $db_pw['email']; 
        echo "
        <script>
            location.href='index.php'
        </script>
        ";   
    }
    // 입력pw == dbpw 아니면
    else {
        echo "
        <script>
        alert('비밀번호가 다릅니다');
        history.back();
        </script>
        ";
    }
    
} else {
    echo "    
    <script>       
        history.back();
    </script>
    ";   
}


?>