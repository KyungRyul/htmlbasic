<?php
    include('db.php');    
    print_r($_POST);
    $email = $_POST['email'];
    $pw = $_POST['pw'];

    $sql = "select password from member 
            where email = '$email'";

    // 쿼리 실행
    $result = $conn -> query($sql);
    
    // 디비에서 들어온 값 db_pw 변수에 저장
    $db_pw = mysqli_fetch_assoc($result);
    
    // 디비에서 넘어온 값이 null
    if ($db_pw == null) {
        echo "이메일이 존재하지 않습니다";
    } else {
        // 비밀번호가 맞는지 확인
        if($pw == $db_pw['password']) {
            echo "로그인성공!";
        } else {
            echo "패스워드 맞지 않습니다!";
        }
    }
        
    

    include('../view/index.html');
?>
