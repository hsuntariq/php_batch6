<?php
// create a conneciton with the database
    $connection = mysqli_connect("localhost","root","","practice_php_batch6") or die("connection failed!!!");
    // get data from the form
    $name = $_POST['name'];
    $age = $_POST['a'];
    $address = $_POST['add'];
    $email = $_POST['mail'];
    // insert data into the database
    $insert = "INSERT INTO student(name,age,address,email) VALUES ('{$name}',$age,'{$address}','{$email}')";
    // execute the query
    mysqli_query($connection,$insert);
    // redirect to the specific page
    header("Location: http://localhost/php_batch6_day2/");
?>