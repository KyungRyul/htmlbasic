<?php 

include ("common.php");
if ($_SESSION) {
    
} else {
    echo "
    <script>
        location.href='sign_in.php';
    </script>
    ";
    
}

$sql = "select 
            no,
            title,
            writer,
            insertTime
        from board";

$result = $conn -> query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color: black; padding:30px; color:white; text-align:center">
        header
        <?php echo $_SESSION['email'] . "님 환영합니다"?>        
        <button onclick="myInfoUpdate()">정보수정</button>
        <button onclick="logout()">로그아웃</button>
    </div>
    <div>
        <?php include('view/board.html'); ?>
    </div>
    <div>
        <table>
            <thead>
                <th>구분</th>
                <th>제목</th>
                <th>작성자</th>
                <th>시간</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['no'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['writer'] ?></td>
                    <td><?php echo $row['insertTime'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
   
</body>
</html>
<script>
    function logout() {
        location.href="logout.php";
    }
    function myInfoUpdate() {
        location.href="my_info_update.php";
    }
</script>