<?php
    $conn = mysqli_connect('localhost','root','','practice_php_batch6');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $update = "UPDATE student set name = '{$name}',age = $age, address = '{$address}',email = '{$email}' WHERE reg = $id";
    mysqli_query($conn,$update);
    header("Location: http://localhost/php_batch6_day2/showData.php");
?>