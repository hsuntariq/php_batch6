


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

    <a href="./index.php" class="btn btn-danger">
        <=
    </a>
    <form action="./search.php" method="POST">
        <input name="search" class="form-control w-25 my-2"  type="search" value="">
        <button class="btn btn-dark mb-3">Search</button>
    </form>
    <div class="container mt-4">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // connection
                    $connection = mysqli_connect("localhost","root","","practice_php_batch6");
                    $select = "SELECT * FROM student";
                    $result = mysqli_query($connection,$select);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "
                                <tr>
                                    <td> {$row['reg']} </td>
                                    <td> {$row['name']} </td>
                                    <td> {$row['age']} </td>
                                    <td> {$row['address']} </td>
                                    <td> {$row['email']} </td>
                                    <td>
                                        <a href='./update-form.php?reg={$row['reg']}' class='btn btn-info'> Edit </a>
                                    </td>
                                    <td>
                                        <a href='./delete.php?reg={$row['reg']}' class='btn btn-danger'> Delete </a>
                                    </td>

                                </tr>
                            ";
                        }
                    }
                ?>
            </tbody>
        </table>
        
    </div>
    </div>

    <!-- $row = [
        "id" => ['1','2','3'],
        "name" => ['ali','ahmed'],
        "age" => ['21','32']
    ]

    <td>
        $row['id']
    </td> -->
    
</body>
</html>