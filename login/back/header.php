<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <title>Document</title>
</head>
<style>
    .header {
        display: flex;        
    }
    .item {
        flex: 1;
    }
</style>
<body>
    <div class="container header" style="text-align: center;">
        <div class="item">로고</div>
        <div class="item">페이지 제목</div>
        <div class="item">
            <?php if ($_SESSION['no']) { ?>
                <button onclick="logout()">로그아웃</button>
            <?php } else { ?>
                <button onclick="login()">로그인</button>
            <?php } ?>
        </div>        
    </div>
</body>
</html>
 
<script>
    function logout() {
        location.href="logout.php";
    }
    function login() {
        location.href="index.html";
    }
</script>