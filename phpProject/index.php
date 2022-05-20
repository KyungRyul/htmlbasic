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
    <div style=" padding:30px; color:black; text-align:center">
        header        
    </div>    
    <div>
        <table class="table table-secondary table-striped table-hover" 
        style="text-align: center;">
            <thead>
                <tr>
                    <th>구분</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>시간</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['no'] ?></td>
                    <td>
                        <a href="content.php?no=<?php echo $row['no'] ?>">
                        <?php echo $row['title'] ?>
                        </a>                        
                    </td>
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