
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
    <div class="display-1 text-center">
        Student Details
    </div>
</body>
<?php
    $connection = mysqli_connect("localhost","root","","practice_php_batch6") or die("connection failed!!!");
    $name = $_POST['search'];
    $select = "SELECT * FROM student WHERE name = '{$name}'";
    $result = mysqli_query($connection,$select);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "
                <div class='card w-25 p-4'>
                    <h3> Name: {$row['name']} </h3>
                    <h3>Email: {$row['email']} </h3>
                    <h3>Age: {$row['age']} </h3>
                    <h3>Address {$row['address']} </h3>
                </div>
            ";
        }
    }
?>

