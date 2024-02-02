<?php 
include 'form.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .errorcolor {
            color: #ff0001;
        }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form validation</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="form container">
        <form id="create-account-form" name="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="title">
                <h1>Registration Form</h1>
            </div>

            <div class="input-group">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" placeholder="Please Enter Your First Name" name="firstname" value="<?php echo  $_SESSION["firstname"];  ?>" autocomplete="off" />
                <span class="errorcolor"><?php echo $nameErr; ?> </span>
            </div>

            <div class="input-group">
                <label for="middlename">Middle Name</label>
                <input type="text" id="middlename" placeholder="Please Enter Your Middle Name" name="middlename" value="<?php echo $_SESSION["middlename"]; ?>" autocomplete="off" />
                <span class="errorcolor"><?php echo $middlenameErr; ?> </span>
            </div>

            <div class="input-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" placeholder="Please Enter Your Last Name" name="lastname" value="<?php echo  $_SESSION["lastname"]; ?>" autocomplete="off" />
                <span class="errorcolor"><?php echo $lastnameErr; ?></span>
            </div>

            <div class="both">
                <div class="input-group">
                    <h2>Date of Birth :</h2>
                    <input type="text" name="datepicker" id="datepicker" placeholder="Select Your Birth Date" value="<?php echo  $_SESSION["datepicker"]; ?>" autocomplete="off" />
                    <span class="errorcolor"><?php echo $datepickerErr; ?></span>
                </div>

                <div class="input-group">
                    <label for="gender">Gender</label>
                    <input type="radio" id="male" name="gender" <?php echo ($_SESSION['gender'] == "male") ? 'checked="checked"' : ''; ?> value="male" />
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" <?php echo ($_SESSION['gender'] == "female") ? 'checked="checked"' : ''; ?> value="female" />
                    <label for="female">Female</label><br />
                    <span class="errorcolor"><?php echo $genderErr; ?></span>
                </div>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter Your Email" name="email" value="<?php echo  $_SESSION["email"]; ?>" autocomplete="off" />
                <span class="errorcolor"><?php echo $emailErr; ?> </span>
            </div>

            <div class="input-group">
                <label for="mobileno">Mobile No</label>
                <input type="tel" id="mobileno" placeholder="Enter Your Mobile Number" name="mobileno" value="<?php echo  $_SESSION["mobileno"]; ?>" autocomplete="off" />
                <span class="errorcolor"><?php echo $mobilenoErr; ?> </span>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter Your Password" value="<?php echo  $_SESSION["password"]; ?>" name="password" />
                <span class="errorcolor"><?php echo $passwordErr; ?> </span>
            </div>

            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Confirm Your Password" name="cpassword" value="<?php echo  $_SESSION["cpassword"]; ?>" />
                <span class="errorcolor"><?php echo $cpasswordErr; ?> </span>
            </div>

            <div class="input-group address-container">
                <label for="address">Address</label>
                <textarea id="address" name="address" placeholder="Enter Your Full Address" rows="3" cols="50" style="resize: none"> <?php echo  $_SESSION["address"]; ?> </textarea>
                <span class="errorcolor"><?php echo $addressErr; ?></span>
            </div>

            <div class="tenth_row">
                <div class="city_state">
                    <div class="input-group">
                        <label for="city">City</label>
                        <select name="city" id="city">
                            <option value>Select</option>
                            <option value="surat" <?php echo ($_SESSION['city'] == "surat") ? 'selected="selected"' : ''; ?>>Surat</option>
                            <option value="vadodara" <?php echo ($_SESSION['city'] == "vadodara") ? 'selected="selected"' : ''; ?>>Vadodara</option>
                            <option value="ahmedabad" <?php echo ($_SESSION['city'] == "ahmedabad") ? 'selected="selected"' : ''; ?>>Ahmedabad</option>
                            <option value="rajkot" <?php echo ($_SESSION['city'] == "rajkot") ? 'selected="selected"' : ''; ?>>Rajkot</option>
                        </select>
                        <span class="errorcolor"><?php echo $cityErr; ?></span>
                    </div>

                    <div class="input-group">
                        <label for="state">State</label>
                        <label for="state">State</label>
                        <select name="state" id="state">
                            <option value>Select</option>
                            <option value="gujarat" <?php echo ($_SESSION['state'] == "gujarat") ? 'selected="selected"' : ''; ?>>Gujarat</option>
                            <option value="maharashtra" <?php echo ($_SESSION['state'] == "maharashtra") ? 'selected="selected"' : ''; ?>>Maharashtra</option>
                            <option value="rajasthan" <?php echo ($_SESSION['state'] == "rajasthan") ? 'selected="selected"' : ''; ?>>Rajasthan</option>
                            <option value="delhi" <?php echo ($_SESSION['state'] == "delhi") ? 'selected="selected"' : ''; ?>>Delhi</option>
                        </select>
                        <span class="errorcolor"><?php echo $stateErr; ?></span>
                    </div>
                </div>

                <div class="input-group">
                    <label for="pincode">Pincode</label>
                    <input type="tel" id="pincode" name="pincode" class="pincode" placeholder="Enter Your Pincode" value="<?php echo  $_SESSION["pincode"]; ?>" />
                    <span class="errorcolor"><?php echo $pincodeErr; ?> </span>
                </div>
            </div>

            <div class="input-group">
                <button type="button" id="add-education">Add
                    Education</button>
                <div id="education-section">
                    <?php
                    if (isset($count) && $count > 0) {
                        for ($i = 0; $i < $count; $i++) {
                    ?>
                            <div class="row first-row">
                                <label>
                                    <select name="educationlevel[]">
                                        <option value>Select</option>
                                        <option value="10th" <?php echo ($educationlevel[$i] == "10th") ? 'selected="selected"' : ''; ?>>10th Class</option>
                                        <option value="12th" <?php echo ($educationlevel[$i] == "12th") ? 'selected="selected"' : ''; ?>>12th Class</option>
                                        <option value="bachelors" <?php echo ($educationlevel[$i] == "bachelors") ? 'selected="selected"' : ''; ?>>Bachelors</option>
                                        <option value="masters" <?php echo ($educationlevel[$i] == "masters") ? 'selected="selected"' : ''; ?>>Masters</option>
                                    </select>
                                    <span class="errorcolor"><?php echo isset($educationlevelErr[$i]) ? $educationlevelErr[$i] : ''; ?> </span>
                                </label>
                                <div id="major">
                                    <label> School</label>
                                    <input type="text" id="major" name="major[]" placeholder="Enter School Name" value="<?php echo $major[$i]; ?>" />
                                    <span class="errorcolor"><?php echo isset($majorErr[$i]) ? $majorErr[$i] : ''; ?> </span>
                                </div>
                                <div id="school">
                                    <label> Percentile </label>
                                    <input type="number" id="school" name="school[]" placeholder="Enter Your Percentile" value="<?php echo $school[$i]; ?>" />
                                    <span class="errorcolor"><?php echo isset($schoolErr[$i]) ? $schoolErr[$i] : ''; ?></span>
                                </div>
                                <button class="delete-btn" type="button">Delete</button>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="row first-row">
                            <label>
                                <select name="educationlevel[]">
                                    <option value>Select</option>
                                    <option value="10th">10th Class</option>
                                    <option value="12th">12thClass</option>
                                    <option value="bachelors">Bachelors</option>
                                    <option value="masters">Masters</option>
                                </select>
                                <span class="errorcolor"><?php echo isset($educationlevelErr[0]) ? $educationlevelErr[0] : ''; ?> </span>
                            </label>
                            <div id="major">
                                <label> School</label>
                                <input type="text" name="major[]" placeholder="Enter School Name" autocomplete="off" />
                                <span class="errorcolor"><?php echo isset($majorErr[0]) ? $majorErr[0] : ''; ?> </span>
                            </div>
                            <div id="school">
                                <label> Percentile </label>
                                <input type="number" name="school[]" placeholder="Enter Your Percentile" autocomplete="off" />
                                <span class="errorcolor"><?php echo isset($schoolErr[0]) ? $schoolErr[0] : ''; ?> </span>
                            </div>
                            <button class="delete-btn" type="button">Delete</button>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="input-group" id="hobbiee-group">
                <label for="hobbiee">Hobbiee</label> <br />
                <input type="checkbox" name="hobbiee[]" id="reading" value="reading" class="hobbiee" <?php echo (isset($_SESSION['hobbiee']) && in_array('reading', $_SESSION['hobbiee'])) ? 'checked' : ''; ?> />Reading<br />
                <input type="checkbox" name="hobbiee[]" value="swimming" id="swimming" class="hobbiee" <?php echo (isset($_SESSION['hobbiee']) && in_array('swimming', $_SESSION['hobbiee'])) ? 'checked' : ''; ?> />Swimming<br />
                <input type="checkbox" name="hobbiee[]" id="others" value="others" class="hobbiee" <?php echo (isset($_SESSION['hobbiee']) && in_array('others', $_SESSION['hobbiee'])) ? 'checked' : ''; ?> />Others<br />
                <span class="errorcolor"><?php echo $hobbieeErr; ?></span>
                <input type="text" name="otherHobbiee" autocomplete="off" id="otherHobbiee" style="<?php echo (isset($_SESSION['hobbiee']) && in_array('others', $_SESSION['hobbiee'])) ? '' : 'display: none'; ?>" placeholder="Enter your Hobbiee" value="<?php echo isset($_SESSION['otherHobbiee']) ? $_SESSION['otherHobbiee'] : ''; ?>" />
                <span class="errorcolor"><?php echo $otherHobbieeErr; ?></span>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <script src="form.js"></script>
</body>

</html>