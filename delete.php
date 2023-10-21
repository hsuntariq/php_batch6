<?php
    $conn = mysqli_connect('localhost','root','','practice_php_batch6');
    $reg = $_GET['reg'];
    $delete = "DELETE FROM student WHERE reg = $reg";
    mysqli_query($conn,$delete);
    header("Location: http://localhost/php_batch6_day2/showData.php");
?>