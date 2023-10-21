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
    
    <div class="container">
    <?php
        $id = $_GET['reg'];
        $conn = mysqli_connect('localhost','root','','practice_php_batch6');
        // query of selection
        $select = "SELECT * FROM student WHERE reg = $id";
        $result = mysqli_query($conn,$select);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "
                <form action='./update.php' method='POST' class='col-md-5 mx-auto shadow p-4'>
                <h1 class='display-1 text-center'>
                    Update Data
                </h1>
                <input class='form-control' type='text' name='id' value='{$row['reg']}'>
                <label for=''>Name</label>
                <input class='form-control' type='text' name='name' value='{$row['name']}'>
                <label for=''>Age</label>
                <input class='form-control' type='number' name='age' value='{$row['age']}'>
                <label for=''>Address</label>
                <input class='form-control' type='text' name='address' value='{$row['address']}'>
                <label for=''>Email</label>
                <input class='form-control' type='email' name='email' value='{$row['email']}'>
                <button class='w-100 my-3 btn btn-info'>
                    Update Data
                </button>
            </form>
                ";
            }
        }
    ?>
        
    </div>
</body>
</html>