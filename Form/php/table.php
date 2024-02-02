<?php include 'form.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add data</a> </button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Password</th>
                <th>Dob</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>

        <?php

        $con = mysqli_connect("localhost", "phpmyadmin", "Admin@123", "myForm");

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $sql =  "SELECT user_data.id, user_data.fname, user_data.mobileno,user_data.email,user_data.confirm_passpassword,user_data.dob,user_data.gender,
        address.address, address.city, address.pincode from user_data 
        INNER JOIN address
        on address.user_data_id = user_data";





        // $sql = "SELECT * FROM `user_data`";   // Fetch data from the database
        $result1 = mysqli_query($con, $sql);

        if ($result1) {
            while ($row = mysqli_fetch_assoc($result1)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['mobileno'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['confirm_pass'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row[''] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }


        mysqli_close($con);
        ?>
    </table>
</body>

</html>