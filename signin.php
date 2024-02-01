<?php
include("admin/connection/config.php");
?>


<?php
    $uname_error = $uemail_error = $ucontact_error = $upassword_error = '';

    if(isset($_POST['sighin'])) {
        $uname = $_POST['uname'];
        $uemail = $_POST['uemail'];
        $countryCode = $_POST['country-code'];
        $ucontact = $_POST['ucontact'];
        $upassword = $_POST['upassword'];
        $id = 0;

        $phone =  $countryCode . $ucontact;
        // Validation checks for each field
        if(empty($uname)) {
            $uname_error = "Please enter your name.";
        }

        if(empty($uemail)) {
            $uemail_error = "Please enter your email.";
        }

        if(empty($ucontact)) {
            $ucontact_error = "Please enter your mobile number.";
        }

        if(empty($upassword)) {
            $upassword_error = "Please enter a password.";
        }elseif(strlen($upassword) < 6) {
            $upassword_error = "Password must be at least 6 characters long.";
        }
        // Proceed with database insertion if no errors
        if(empty($uname_error) && empty($uemail_error) && empty($ucontact_error) && empty($upassword_error)) {
            // All fields are filled, proceed with database insertion
            // Make sure to sanitize and validate user inputs before inserting into the database
            $query = "INSERT INTO login_table (id, username, email, password, contact) VALUES('$id','$uname','$uemail','$upassword','$phone')";
            $data = mysqli_query($conn, $query);

            if($data) {
                echo "Data inserted successfully.";
                $uname = $uemail = $ucontact = $upassword = ''; // Reset form fields
                header("Location: index.php"); // Redirect to index.php
                exit(); // Stop executing the rest of the script
            } else {
                echo "Failed to insert data.";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/login.css">

    <style>
        /* ========== login ======= */
* {
    margin: 0;
    padding: 0;
}



/* =======================     sigh in form   =========== */
.sign-in-form a {
    text-decoration: none;
    color: #004E98;
}

.sign-in-form img {
    display: flex;
    margin: 10px auto;
    width: 100px;
    align-items: center;
    justify-content: center;
}

.sign-in-form h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.form-signin {
    margin: 0px auto;
    width: 450px;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 10px;
}

.form-signin form {
    border-bottom: 2px solid #ccc;
    padding-bottom: 30px;
}

.form-signin form label {
    font-weight: normal;
    color: #6e6e6e;
    font-size: 14px;
    width: 100%;
    font-family: Arial, sans-serif;
}

.form-signin input[type="text"],
.form-signin input[type="password"],
.form-signin input[type="email"] {
    font-size: 14px;
    box-shadow: 0px 0px 3px 0px #ccc;
    width: 95%;
    padding: 8px 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border-radius: 3px;
    outline: none;
    border: 1px solid #ccc;
}

.form-signin form .input {
    display: flex;
    margin-bottom: -20px;
}

.form-signin form .input .country-code select {
    margin-right: 5px;
    width: 100px;
    padding: 8px 10px;
    margin-top: 5px;
    box-shadow: 0px 0px 3px 0px #ccc;
    border-radius: 3px;
    outline: none;
    border: 1px solid #ccc;
}

.form-signin .input #ucontact {
    width: 70%;
    margin-left: 20px;
}

.form-signin p {
    margin-top: -10px;
    font-size: 14px;
}

.form-signin button {
    width: 100%;
    padding: 8px;
    text-align: center;
    background-color: orange;
    border: none;
    outline: none;
    font-size: 14px;
    border-radius: 8px;
}
.form-signin button:hover 
{
    color: #fff;
}
.form-signin #enroll {
    margin: 20px 0;
}

.form-signin .conditions {
    margin: 20px 0;
}

.conditions p {
    margin: 20px 0;
    font-size: 16px;
}

.check {
    text-align: left;
    display: flex;
    margin-bottom: 10px;
    /* justify-content: space-between; */
}

.check input[type="checkbox"] {
    width: 20px;
    left: 0;

}

.check a {
    text-decoration: none;
    color: #004E98;
    margin-left: 50px;
}
    </style>

</head>

<body style="background-color:white;">

    <div class="sign-in-form">
        <img src="images/logo-1.jpg"  alt="">
        <div class="form-signin">
            <h2>SignUp Form</h2>

            <form method="POST">
                <label for="fname">Your Name</label><br>
                <input type="text" id="u" name="uname" placeholder="First and Last name"
                    value="<?php echo isset($uname) ? $uname : ''; ?>">
                <span class="error" style="color:red;"><?php echo $uname_error; ?></span><br>

                <label for="lname">Your Email</label><br>
                <input type="email" id="e" name="uemail" placeholder="Email address"
                    value="<?php echo isset($uemail) ? $uemail : ''; ?>">
                <span class="error" style="color:red;"><?php echo $uemail_error; ?></span><br>

                <label for="lname">Your Mobile Number</label><br>
                <div class="input">
                    <div class="country-code">
                        <select id="country-code" name="country-code">
                            <option value="+91"
                                <?php if(isset($countryCode) && $countryCode == '+91') echo 'selected'; ?>>IN +91
                            </option>
                            <option value="+1"
                                <?php if(isset($countryCode) && $countryCode == '+1') echo 'selected'; ?>>US +1</option>
                            <option value="+44"
                                <?php if(isset($countryCode) && $countryCode == '+44') echo 'selected'; ?>>UK +44
                            </option>
                            <option value="+61"
                                <?php if(isset($countryCode) && $countryCode == '+61') echo 'selected'; ?>>Australia +61
                            </option>
                            <option value="+86"
                                <?php if(isset($countryCode) && $countryCode == '+86') echo 'selected'; ?>>China +86
                            </option>
                            <option value="+49"
                                <?php if(isset($countryCode) && $countryCode == '+49') echo 'selected'; ?>>Germany +49
                            </option>
                            <option value="+33"
                                <?php if(isset($countryCode) && $countryCode == '+33') echo 'selected'; ?>>France +33
                            </option>
                            <option value="+81"
                                <?php if(isset($countryCode) && $countryCode == '+81') echo 'selected'; ?>>Japan +81
                            </option>
                            <option value="+52"
                                <?php if(isset($countryCode) && $countryCode == '+52') echo 'selected'; ?>>Mexico +52
                            </option>
                            <!-- Add more country codes as needed -->
                        </select>
                    </div>
                    <input type="text" id="ucontact" name="ucontact" placeholder="Mobile number"
                        value="<?php echo isset($ucontact) ? $ucontact : ''; ?>" minlength="10" maxlength="15">
                </div>
                <span class="error" style="color:red;"><?php echo $ucontact_error; ?></span><br>

                <label for="lname">Password</label><br>
                <input type="password" id="upassword" name="upassword" placeholder="At least 6 characters"
                    minlength="6">
                <span class="error" style="color:red;"><?php echo $upassword_error; ?></span><br>

                <div class="check">
                    <input type="checkbox" onclick="myFunction()">Show Password
                    <a href="">Forgot password ?</a>
                </div>
                <br />
                <!-- ======= -->
                <p style="color:#004E98;"><i>* </i>Passwords must be at least 6 characters.</p>
                <p id="enroll">By enrolling your mobile phone number, you consent to receive automated security
                    notifications via text message from Amazon. Message and data rates may apply.</p>

                <!-- ========= -->
                <button type="submit" name="sighin" value="SignUp" id="SignUp">SignUp</button>
            </form>

            <!-- ===================== -->
            <div class="conditions">
                <p>Already have an account? <a href="login.php">Sign in.</a><br />
                    Buying for work? <a href=""> Create a free business account.</a></p>
                <p> By creating an account or logging in, you agree to Amazon’s <a href="">Conditions of Use</a> and
                    <a href="">Privacy Policy.</a>
                </p>
            </div>

        </div>
    </div>

    <!-- ============= -->

    <script>
    function myFunction() {
        var x = document.getElementById("upassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>

</html>