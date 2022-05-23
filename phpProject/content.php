<?php 

include('common.php');

$no = $_GET['no'];

$sql = "select 
            title,
            content,
            writer,
            insertTime,
            goodCount,
            count
        from board 
        where no = '$no'";

$result = $conn -> query($sql);

$data = mysqli_fetch_assoc($result);

if($data) {
        
} else {    
    echo "
    <script>
        alert('비정상 접근')
        location.href='index.php';        
    </script>
    ";
}

?>
<style>    
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


<div style="margin: 10%; border:1px solid black;">
    제목<i id="good"class="bi bi-heart" onclick="good()"></i>    
    <p>
    <?php echo $data['title'];?>
    </p>
    내용
    <pre>
    <?php echo $data['content'];?>
    </pre>
    작성자
    <p>
    <?php echo $data['writer'];?>
    </p>
    작성시간
    <p>
    <?php echo $data['insertTime'];?>
    </p>    
    <p>
    <b>
    좋아요 : <?php echo $data['goodCount'];?>
    조회수 : <?php echo $data['count'];?>
    </b>    
    
</svg>
    </p>
    <?php if($data['writer'] == $_SESSION['email']) { ?>
    <button onclick="updateContent()">수정</button>
    <button onclick="deleteContent()">삭제</button>
    <?php } ?>
</div>

<script>
    function updateContent() {
        location.href='update_content.php?no=' + <?php echo $no ?>;
    }
    function deleteContent() {
        location.href='delete_content.php?no=' + <?php echo $no ?>;
    }
    function good() {
        var className = document.querySelector('#good').className
        if(className == 'bi bi-heart') {
            document.querySelector('#good').setAttribute('class', 'bi bi-heart-fill');
            document.querySelector('#good').style.color = 'red';
        } 
        if(className == 'bi bi-heart-fill') {
            document.querySelector('#good').setAttribute('class', 'bi bi-heart');
            document.querySelector('#good').style.color = '';
        } 
        
    }




</script>