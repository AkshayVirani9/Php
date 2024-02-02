$(function () {
    $("#datepicker").datepicker({
        maxDate: "now",
        dateFormat: "dd/mm/yy",
    });
});
// function isEmailValid(email) {
//   const Reg =
//     /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
//   return Reg.test(email);
// }
// function isPercentileValid(percentile) {
//   const Reg = /^\d{1,2}\.\d{1,2}$|^\d{1,3}$/;
//   return Reg.test(percentile);
// }
// const form = document.getElementById("create-account-form");
// const firstnameInput = document.getElementById("firstname");
// const middlenameInput = document.getElementById("middlename");
// const lastnameInput = document.getElementById("lastname");
// const emailInput = document.getElementById("email");
// const mobilenoInput = document.getElementById("mobileno");
// const passwordInput = document.getElementById("password");
// const confirmpasswordInput = document.getElementById("confirm-password");
// const genderInputs = form.querySelectorAll('input[name="gender"]');
// const datepickerInput = document.getElementById("datepicker");
// const addressInput = document.getElementById("address");
// const pincodeInput = document.getElementById("pincode");
// const city = document.getElementById("city");
// const state = document.getElementById("state");
// const hobbyCheckboxes = document.querySelectorAll('input[name="hobbiee[]"]');
const otherHobbieeCheckbox = document.getElementById("others");
const otherHobbieeInput = document.getElementById("otherHobbiee");
// const hobbieeError = document.getElementById("hobbiee-error");

// function validateForm() {
//   if (firstnameInput.value.trim() == "") {
//     setError(firstnameInput, "Name can not empty");
//   } else if (
//     firstnameInput.value.length < 5 || firstnameInput.value.length > 15 || !/^[A-Za-z]+$/.test(firstnameInput.value)
//   ) {
//     setError(firstnameInput, "only 5 to 15 character allowed");
//   } else {
//     setSuccess(firstnameInput);
//   }
//   if (middlenameInput.value.trim() == "") {
//     setError(middlenameInput, "Name can not empty");
//   } else if (
//     middlenameInput.value.length < 5 || middlenameInput.value.length > 15 || !/^[A-Za-z]+$/.test(middlenameInput.value)
//   ) {
//     setError(middlenameInput, "only 5 to 15 character allowed");
//   } else {
//     setSuccess(middlenameInput);
//   }
//   if (lastnameInput.value.trim() == "") {
//     setError(lastnameInput, "Name can not empty");
//   } else if (
//     lastnameInput.value.length < 5 || lastnameInput.value.length > 15 || !/^[A-Za-z]+$/.test(lastnameInput.value)
//   ) {
//     setError(lastnameInput, "only 5 to 15 character allowed");
//   } else {
//     setSuccess(lastnameInput);
//   }
//   if (emailInput.value.trim() == "") {
//     setError(emailInput, "Enter email address");
//   } else if (isEmailValid(emailInput.value)) {
//     setSuccess(emailInput);
//   } else {
//     setError(emailInput, "Enter Valid email address");
//   }
//   if (mobilenoInput.value.trim() == "") {
//     setError(mobilenoInput, "Enter your Mobile Number");
//   } else if (
//     mobilenoInput.value.length !== 10
//   ) {
//     setError(mobilenoInput, "Enter valid number");
//   } else {
//     setSuccess(mobilenoInput);
//   }
//   if (passwordInput.value.trim() == "") {
//     setError(passwordInput, "Please Enter Password");
//   } else if (
//     passwordInput.value.trim().length < 6 || passwordInput.value.trim().length > 15
//   ) {
//     setError(passwordInput, "Enter password min 6 and max 15 characters");
//   } else {
//     setSuccess(passwordInput);
//   }
//   if (confirmpasswordInput.value.trim() == "") {
//     setError(confirmpasswordInput, "Password can not empty");
//   } else if (confirmpasswordInput.value !== passwordInput.value) {
//     setError(confirmpasswordInput, "Password does not match");
//   } else {
//     setSuccess(confirmpasswordInput);
//   }

//   let isGenderSelected = false;
//   genderInputs.forEach((input) => {
//     if (input.checked) {
//       isGenderSelected = true;
//     }
//   });

//   if (!isGenderSelected) {
//     setError(genderInputs[0], "Select a gender");
//   } else {
//     setSuccess(genderInputs[0]);
//   }
//   if (datepickerInput.value == "") {
//     setError(datepickerInput, "select date");
//   } else {
//     setSuccess(datepickerInput);
//   }
//   if (addressInput.value.trim() == "") {
//     setError(addressInput, "Enter your Address");
//   } else if (
//     addressInput.value.length < 10 ||addressInput.value.length > 50
//   ) {
//     setError(addressInput, "Min character 10 and max 50 allowed");
//   } else {
//     setSuccess(addressInput);
//   }
//   if (city.value === "") {
//     setError(city, "choose city");
//   } else {
//     setSuccess(city);
//   }
//   if (state.value === "") {
//     setError(state, "select state");
//   } else {
//     setSuccess(state);
//   }
//   if (pincodeInput.value.trim() == "") {
//     setError(pincodeInput, "Enter pincode");
//   } else if (pincodeInput.value.length !== 6) {
//     setError(pincodeInput, "pincode only 6 character");
//   } else {
//     setSuccess(pincodeInput);
//   }

//    const selectedHobbies = Array.from(hobbyCheckboxes).filter(
//      (checkbox) => checkbox.checked
//    );
//    if (selectedHobbies.length < 1) {
//      setError(hobbieeError, "Select hobby");
//    } else {     setSuccess(hobbieeError);
//      if (otherHobbieeCheckbox.checked) {
//        if (otherHobbieeInput.value.trim() === "") {
//          setError(otherHobbieeInput, "Enter your Hobby");
//          return false;
//        } else {
//          setSuccess(otherHobbieeInput);
//       }
//     }
//    }
document.getElementById("others").addEventListener("change", function () {
    if (this.checked) {
        otherHobbieeInput.style.display = "block";
    } else {
        otherHobbieeInput.style.display = "none";
        otherHobbieeInput.value = "";
    }
});
const educationRows = document.querySelectorAll("#education-section .row");
educationRows.forEach((row) => {
    const educationLevel = row.querySelector('select[name="educationlevel[]"]');
    const major = row.querySelector('input[name="major"]');
    const school = row.querySelector('input[name="school"]');
    const errorContainer = row.querySelector(".error-message");

    if (educationLevel.value === "") {
        setError(educationLevel, "Enter field", errorContainer);
    } else {
        setSuccess(educationLevel, errorContainer);
    }
    if (major.value.trim() === "") {
        setError(major, "Enter field", errorContainer);
    } else {
        setSuccess(major, errorContainer);
    }
    if (school.value.trim() === "") {
        setError(school, "Enter field", errorContainer);
    } else if (isPercentileValid(school.value)) {
        setSuccess(school, errorContainer, "Enter Field");
    } else {
        setError(school, "Enter only numbers", errorContainer);
    }
});
// function isFormValid() {
//     const inputContainers = form.querySelectorAll(".input-group");
//     let result = true;
//     inputContainers.forEach((container) => {
//         if (container.classList.contains("error")) {
//             result = false;
//         }
//     });
//     return result;
// }
// return isFormValid();
//  }
document.getElementById("add-education").addEventListener("click", function () {
    const newRow = createNewRow();
    document.getElementById("education-section").appendChild(newRow);
    addDeleteButtonListener(newRow.querySelector(".delete-btn"));
});
function createNewRow() {
    const firstRow = document.querySelector("#education-section .first-row");
    const newRow = firstRow.cloneNode(true);
    newRow.classList.remove("first-row");

    const inputs = newRow.querySelectorAll("input, select");
    inputs.forEach((input) => {
        input.value = "";

        const parent = input.parentElement; // Remove success and error classe
        parent.classList.remove("success", "error");
        const errorContainer = parent.querySelector(".error-message"); // Clear error message
        if (errorContainer) {
            errorContainer.textContent = "";
        }
    });

    return newRow;
}
function addDeleteButtonListener(deleteButton) {
    deleteButton.addEventListener("click", function () {
        const row = deleteButton.parentElement;
        if (!row.classList.contains("first-row")) {
            row.parentElement.removeChild(row); // Check if the current row is the first one
        }
    });
}
// function setError(element, errorMessage) {
//   if (element && element.parentElement) {
//     const parent = element.parentElement;

//     if (parent.classList.contains("success")) {
//       parent.classList.remove("success");
//     }
//     parent.classList.add("error");
//     const paragraph =  parent.querySelector("p");
//     paragraph.textContent = errorMessage;
//   }
// }
// function setSuccess(element) {
//   const parent = element.parentElement;
//   if (parent.classList.contains("error")) {
//     parent.classList.remove("error");
//   }
//   parent.classList.add("success");
// }

// form.addEventListener("submit", (event) => {
//   event.preventDefault();
//   if (validateForm() == true) {
//     confirm("Are you sure to submit this form!");
//     form.submit();
//   }
// });


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

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // ... (your existing validation code)

    if (!empty($errors)) {
        // Display errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // No errors, proceed with database creation
        $servername = "localhost";
        $username = "phpmyadmin";
        $password = "Admin@123";

        try {
            $conn = new mysqli($servername, $username, $password);
            // Create connection

            if (!$conn) {
                throw new Exception("Connection failed: " . mysqli_connect_error());
            }

            // Create database
            $sql = "CREATE DATABASE myForm;";
            $result = $conn->query($sql);

            if (!$result) {
                throw new Exception("Error creating database: " . mysqli_error($conn));
            }

            echo "Database created successfully";
            header("Location: index.php");
            exit();
        } catch (Exception $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
?>


// sql code//

//         $sql = "INSERT INTO address (address, city, state, pincode)
//             VALUES ('$address', '$city', '$state', '$pincode')";

//         if (mysqli_query($conn, $sql)) {
//             echo "Address record created successfully<br>";
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }


//         // Insert data into education table

//         $array = array('education_level');
//         $educationlevel = implode(",", $educationlevel);

//         $array = array('major');
//         $major = implode(",", $major);

//         $array = array('school');
//         $school = implode(",", $school);
//         $sql = "INSERT INTO education (education_level, school, persentile)
//             VALUES ('$educationlevel', '$major', '$school')";


//         if (mysqli_query($conn, $sql)) {
//             echo "Education record created successfully<br>";
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }

//         //Insert data into user


//         $array = array('hobbiee');
//         $hobbiee = implode(",", $hobbiee);
        

//         $sql = "INSERT INTO user_data (fname,mname,lname,dob,gender,email,mobileno,pass,confirm_pass,hobbiee,other_hobbiee)

//             VALUES ('$firstname', '$middlename', '$lastname','$datepicker','$gender','$email','$mobileno','$password','$cpassword','$hobbiee','$otherHobbiee')";

//         if (mysqli_query($conn, $sql)) {
//             echo "User record created successfully";
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//     } catch (Exception $e) {
//         echo "Error:" . $e->getMessage();
//     } finally {
//         if ($conn) {
//             $conn->close();
//         }
//     }
// }



//code //


        // Insert data into address table
        // $sql = "INSERT INTO address (address, city, state, pincode, user_data_id)
        //         VALUES ('$address', '$city', '$state', '$pincode','$userId')";
// $sql = "INSERT INTO address (address, city, state, pincode, user_data_id)
//             VALUES ('$address', '$city', '$state', '$pincode','$userId')";
//         if (mysqli_query($conn, $sql)) {
//             echo "Address record created successfully<br>";
//         } else {
//             throw new Exception("Error: " . $sql . "<br>" . mysqli_error($conn));
//         }
    // $hobbies = implode(",", $_SESSION['hobbiee']);
        // $sql = "INSERT INTO user_data (fname, mname, lname, dob, gender, email, mobileno, pass, confirm_pass, hobbiee, other_hobbiee)
        //         VALUES ('$firstname', '$middlename', '$lastname', '$datepicker', '$gender', '$email', '$mobileno', '$password', '$cpassword', '$hobbies', '$otherHobbiee')";
        // if (mysqli_query($conn, $sql)) {
        //     echo "User record created successfully<br>";

        //     // Get the ID of the inserted user
        //     $userId = mysqli_insert_id($conn);



        //     // Insert data into education table
        //     $count = count($_SESSION['educationlevel']);
        //     for ($i = 0; $i < $count; $i++) {
        //         $educationLevel = $_SESSION['educationlevel'][$i];
        //         $major = $_SESSION['major'][$i];
        //         $school = $_SESSION['school'][$i];

        //         $sql = "INSERT INTO education (education_level, school, persentile, user_data_id)
        //                 VALUES ('$educationLevel', '$major', '$school', $userId)";

        //         if (mysqli_query($conn, $sql)) {
        //             echo "Education record created successfully<br>";
        //         } else {
        //             throw new Exception("Error: " . $sql . "<br>" . mysqli_error($conn));
        //         }
        //     }
        // } else {
        //     throw new Exception("Error: " . $sql . "<br>" . mysqli_error($conn));
       
        
        $sql = "select * from 'myForm'";
$result = mysqli_query($con,$sql);
if($result){
    $row =mysqli_fetch_assoc($result);
    echo $row['fname'];
}