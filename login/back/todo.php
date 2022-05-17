<?php 
$user_no = $_SESSION['no'];
if($user_no) {

} else {
    echo "
    <script>
        location.href='login.php';
    </script>
    ";
}

include('../view/todo.html');
?>