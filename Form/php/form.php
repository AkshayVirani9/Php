<?php

session_start();
$_SESSION["firstname"] = $_POST['firstname'];
$_SESSION["middlename"] = $_POST['middlename'];
$_SESSION["lastname"] = $_POST['lastname'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["datepicker"] = $_POST['datepicker'];
$_SESSION["gender"] = $_POST['gender'];
$_SESSION["mobileno"] = $_POST['mobileno'];
$_SESSION["password"] = $_POST['password'];
$_SESSION["cpassword"] = $_POST['cpassword'];
$_SESSION["address"] = trim($_POST['address']);
$_SESSION["city"] = $_POST['city'];
$_SESSION["state"] = $_POST['state'];
$_SESSION["pincode"] = $_POST['pincode'];
$_SESSION["hobbiee"] = $_POST['hobbiee'];
$_SESSION["otherHobbiee"] = $_POST['otherHobbiee'];
$_SESSION["educationlevel"] = $_POST['educationlevel'];
$_SESSION["major"] = $_POST['major'];
$_SESSION["school"] = $_POST['school'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty($_SESSION["firstname"])) {
        $nameErr = "Firstname required";
    } else {
        $firstname = ($_SESSION["firstname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
            $nameErr = "Only character allowed";
        }
    }
    if (empty($_SESSION['middlename'])) {
        $middlenameErr = "Middlename required";
    } else {
        $middlename = ($_SESSION['middlename']);
        if (!preg_match("/^[a-zA-Z ]*$/", $middlename)) {
            $middlenameErr = "Only character allowed";
        }
    }
    if (empty($_SESSION['lastname'])) {
        $lastnameErr = "Lastname required";
    } else {
        $lastname = ($_SESSION['lastname']);
        if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            $lastnameErr = "Only character allowed";
        }
    }
    if (empty($_SESSION['datepicker'])) {
        $datepickerErr = "<br>select date";
    } else {
        $datepicker = ($_SESSION['datepicker']);
    }
    if (empty($_SESSION['gender'])) {
        $genderErr = "select gender";
    } else {
        $gender = ($_SESSION['gender']);
    }
    if (empty($_SESSION['email'])) {
        $emailErr = "Email required";
    } else {
        $email  = ($_SESSION['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email";
        }
    }
    if (empty($_SESSION['mobileno'])) {
        $mobilenoErr = "Mobileno required";
    } else {
        $mobileno = ($_SESSION['mobileno']);
        if (!preg_match("/^[0-9]{10}+$/", $mobileno)) {
            $mobilenoErr = "<br>only number allowed";
        }
    }
    if (empty($_SESSION['password'])) {
        $passwordErr = "password required";
    } else {
        $password = ($_SESSION['password']);
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Password Contain At Least 8 Characters!";
        } elseif (!preg_match("#[0-9]+#", $password)) {
            $passwordErr = "Your Password Contain At Least 1 Number!";
        }
    }
    if (empty($_SESSION['cpassword'])) {
        $cpasswordErr = "Password required";
    } else if ($_SESSION['cpassword'] !== $_SESSION['password']) {
        $cpasswordErr = "password not match";
    } else {
        $cpassword = ($_SESSION['cpassword']);
    }
    if (empty($_SESSION['address'])) {
        $addressErr = 'address required';
    } elseif (strlen($_SESSION['address']) < 10 || strlen($_SESSION['address']) > 100) {
        $addressErr = "address min 10 or max 100 character";
    } else {
        $address = trim($_SESSION['address']);
    }
    if (empty($_SESSION["city"])) {
        $cityErr = "</br> select city";
    } else {
        $city = ($_SESSION["city"]);
    }
    if (empty($_SESSION['state'])) {
        $stateErr = "</br> select state";
    } else {
        $state = ($_SESSION['state']);
    }
    if (empty($_SESSION['pincode'])) {
        $pincodeErr = "Pincode is required.";
    } elseif (strlen($_SESSION['pincode']) != '6') {
        $pincodeErr = "Pincode must be 6 digits long.";
    } else {
        $pincode = ($_SESSION['pincode']);
    }
    $count = count($_SESSION['educationlevel']);
    $educationlevelErr = $majorErr = $schoolErr = array();
    for ($i = 0; $i < $count; $i++) {
        if (empty($_SESSION['educationlevel'][$i])) {
            $educationlevelErr[$i] = "<br>select education";
        } else {
            $educationlevel = ($_SESSION['educationlevel']);
        }
        if (empty($_SESSION['major'][$i])) {
            $majorErr[$i] = "<br>school name required ";
        } else {
            $major = ($_SESSION['major']);
        }
        if (empty($_SESSION['school'][$i])) {
            $schoolErr[$i] = "<br>Persentile required";
        } else {
            $school = ($_SESSION['school']);
        }
    }
    if (empty($_SESSION['hobbiee'])) {
        $hobbieeErr = "Select at least one hobbiee.";
    } else {
        $hobbiee = $_SESSION['hobbiee'];

        if (in_array("others", $hobbiee)) {
            $otherHobbiee = ($_SESSION['otherHobbiee']);
            if (empty($otherHobbiee)) {
                $hobbieeErr = "Enter other hobbiee.";
            }
        }
    }


    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $firstname = $_SESSION["firstname"];
    $middlename = $_SESSION["middlename"];
    $lastname = $_SESSION["lastname"];
    $email = $_SESSION["email"];
    $datepicker = $_SESSION["datepicker"];
    $gender = $_SESSION["gender"];
    $mobileno = $_SESSION["mobileno"];
    $password = $_SESSION["password"];
    $cpassword_ = $_SESSION["cpassword"];
    $address = $_SESSION["address"];
    $city = $_SESSION["city"];
    $state = $_SESSION["state"];
    $pincode = $_SESSION["pincode"];
    $hobbiee = $_SESSION["hobbiee"];
    $otherHobbiee = $_SESSION["otherHobbiee"];
    $educationlevel = $_SESSION["educationlevel"];
    $major = $_SESSION["major"];
    $school = $_SESSION["school"];

    //connect//
    $servername = "localhost";
    $username = "phpmyadmin";
    $password = "Admin@123";
    $dbname = "myForm";

    try {
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Create connection

        if (!$conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }
        echo "Connection successfull<br>";


        // // Create database //

        $sql = "CREATE DATABASE IF NOT EXISTS myForm;";
        $result = $conn->query($sql);

        if (!$result) {

            throw new Exception("Error creating database: " . mysqli_error($conn));
            exit;
        }
        $result1 = mysqli_query($conn,$sql);
        if (mysqli_query($conn, $sql)) {
            echo "User data table created successfully<br>";
        } else {
            throw new Exception("Error creating table:" . mysqli_error($conn));
        }

        // create table for User data //

        $sql = "CREATE TABLE IF NOT EXISTS user_data(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(25) NOT NULL, 
    mname VARCHAR(25) NOT NULL, 
    lname VARCHAR(25) NOT NULL,
    dob DATE NOT NULL,
    gender ENUM('Male','female') NOT NULL,
    email VARCHAR(25) NOT NULL,
    mobileno VARCHAR(15) NOT NULL,
    pass VARCHAR(30) NOT NULL,
    confirm_pass VARCHAR(30) NOT NULL,
    hobbiee VARCHAR(20) NOT NULL,
    other_hobbiee VARCHAR(20) NOT NULL
    
)";

        // create table for address //

        $sql = "CREATE TABLE IF NOT EXISTS address(
    id INT AUTO_INCREMENT PRIMARY KEY,
    address VARCHAR(150) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(20) NOT NULL,
    pincode VARCHAR(10) NOT NULL,
    user_data_id INT,
    FOREIGN KEY (user_data_id) REFERENCES user_data(id)
)";

        if (mysqli_query($conn, $sql)) {
            echo "Address table created successfully<br>";
        } else {
            throw new Exception("Error creating table:" . mysqli_error($conn));
        }


        // create table for education field //

        $sql = "CREATE TABLE IF NOT EXISTS education(
    id INT AUTO_INCREMENT PRIMARY KEY,
    education_level VARCHAR(30) NOT NULL,
    school VARCHAR(30) NOT NULL,
    persentile VARCHAR(100) NOT NULL,
    user_data_id INT,
    FOREIGN KEY (user_data_id) REFERENCES user_data(id)
)";

        if (mysqli_query($conn, $sql)) {
            echo "Education table created successfully<br>";
        } else {
            throw new Exception("Error creating table:" . mysqli_error($conn));
        }
        echo "Database created successfully<br>";

        // Insert data into user table //

        $hobbies = implode(",", $_SESSION['hobbiee']);
        $sql = "INSERT INTO user_data (fname, mname, lname, dob, gender, email, mobileno, pass, confirm_pass, hobbiee, other_hobbiee)
        VALUES ('$firstname', '$middlename', '$lastname', '$datepicker', '$gender', '$email', '$mobileno', '$password', '$cpassword', '$hobbies', '$otherHobbiee')";
        if (mysqli_query($conn, $sql)) {
            echo "User record created successfully<br>";


            $userId = mysqli_insert_id($conn);                           // Get the ID of the inserted user


            if (isset($userId)) {                                       // Check if $userId is set before using it
                // Insert data into address table //

                $sql = "INSERT INTO address (address, city, state, pincode, user_data_id)
                VALUES ('$address', '$city', '$state', '$pincode','$userId')";

                if (mysqli_query($conn, $sql)) {
                    echo "Address record created successfully<br>";

                    // Insert data into education table //

                    $count = count($_SESSION['educationlevel']);
                    for ($i = 0; $i < $count; $i++) {
                        $educationLevel = $_SESSION['educationlevel'][$i];
                        $major = $_SESSION['major'][$i];
                        $school = $_SESSION['school'][$i];

                        $sql = "INSERT INTO education (education_level, school, persentile, user_data_id)
                        VALUES ('$educationLevel', '$major', '$school', $userId)";

                        if (mysqli_query($conn, $sql)) {
                            echo "Education record created successfully<br>";
                        } else {
                            throw new Exception("Error: " . $sql . "<br>" . mysqli_error($conn));
                        }
                    }
                    
             header("Location: table.php");                      // Redirect to table.php after successfully inserting all data
            exit();
                } else {
                    throw new Exception("Error: " . $sql . "<br>" . mysqli_error($conn));
                }
            } else {
                echo "User ID not set.";
            }
        } else {
            throw new Exception("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
    } catch (Exception $e) {
        echo "Error:" . $e->getMessage();
    } finally {
        if ($conn) {
            $conn->close();
        }
    }
}
?>