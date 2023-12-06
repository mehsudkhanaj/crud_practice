<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container ">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>


        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SI NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM crud";
                $result = mysqli_query($conn, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        // $mobile=$row['mobile'];
                        echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $mobile . '</td>
        <td>' . $password . '</td>
        <td>
        <button class="btn btn-primary"><a class="text-light"  href="update.php?uid='. $id .'">Update</a></button>
        <button class="btn btn-danger"><a class="text-light" href="delete.php?did='.$id.'">Delete</a></button>
</td>

      </tr>';
}
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>