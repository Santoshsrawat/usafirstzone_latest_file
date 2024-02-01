<?php
    session_start();
    include("admin/connection/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title> Login </title>
    <link rel="stylesheet" href="CSS/login.css">
    <style>
    /* ========== login ======= */
    * {
        margin: 0;
        padding: 0;
    }

    .login-section {
        background: #fff;
        margin: 0;
        border-bottom: 2px solid #ccc;
        padding-bottom: 40px;
    }

    .login-section #sign-in-logo {
        display: flex;
        width: 100px;
        margin: 10px auto;
    }

    .login-form {
        width: 300px;
        border-radius: 10px;
        padding: 20px;
        margin: 0px auto 0 auto;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    .login-form h2 {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .login-form form label {

        font-size: 14px;
        font-weight: normal;
        color: #6e6e6e;
        font-family: Arial, sans-serif;
    }

    .login-form form input[type="text"],
    .login-form form input[type="password"] {
        position: relative;
        border-radius: 5px;
        padding: 8px;
        width: 95%;
        outline: none;
        margin: 5px 0 20px;
        border: 1px solid #ccc;
    }

    .login-form form input:focus {
        box-shadow: 0px 0px 5px 0px skyblue;
    }

    .login-form form button {
        width: 100%;
        border-radius: 5px;
        padding: 6px 10px;
        border: none;
        outline: none;
        font-size: 14px;
        text-align: center;
        background-color: orange;
        margin: 10px 0 15px 0;
    }

    .login-form form button:hover {
        color: #fff;
    }

    .login-form p {
        font-size: 15px;
    }

    .login-form span {
        font-size: 16px;
        margin: 60px 0;
        font-weight: 600;
        color: #004E98;
    }

    #new-cust {
        text-align: center;
        font-size: 14px;
        color: #a9a9a9;
        margin-bottom: 10px;
    }

    #new-cust:before {
        position: absolute;
        content: '';
        width: 120px;
        height: 1px;
        border-radius: 5px;
        margin-left: -130px;
        margin-top: 8px;
        background-color: #ccc;
    }

    #new-cust:after {
        position: absolute;
        content: '';
        width: 120px;
        height: 1px;
        border-radius: 5px;
        background-color: #ccc;
        margin-left: 10px;
        margin-top: 8px;
    }

    #sign-btn-2 {
        text-decoration: none;
    }

    #sign-in-btn-2 {
        display: flex;
        margin: 0 auto;
        text-align: center;
        justify-content: center;
        align-items: center;
        padding: 8px;
        width: 350px;
        font-size: 14px;
        border-radius: 10px;
        border: 1px solid #ccc;
        box-shadow: 0px 0px 5px 0px #ccc;
        outline: none;
        background-color: #fff;
    }

    .conditions-aply {
        margin: 20px auto;
        width: 300px;
    }

    .conditions-aply .first-apply {
        display: flex;
        justify-content: space-between;

    }

    .conditions-aply .first-apply a {
        color: #004E98;
        font-size: 14px;
    }

    .conditions-aply p {
        text-align: center;
        font-size: 14px;
    }
    </style>

</head>

<body>

    <div class="login-section">
        <img src="images/logo-1.jpg" alt="" id="sign-in-logo">
        <!-- <img src="img/logo.png" alt="" > -->
        <div class="login-form">
            <h2>Sign In</h2>
            <form action="" method="POST">
                <label for="">Email or Mobile Phone Number</label>
                <input type="text" name="uname" required placeholder="Email / Phone number"><br />
                <label for="upassword">Password</label>
                <input type="password" name="upassword" id="upassword" required placeholder="Enter Password">
                <!-- ==== check password   ==== -->
                <div class="check">
                    <input type="checkbox" onclick="myFunction()">Show Password
                    <a href="">Forgot password ?</a>
                </div>
                <!-- ==    -->
                <button type="submit" name="login">login</button>
            </form>
            <p>Lorem ipsum dolor sit amet.<a href="">Conditions?</a></p>
            <span>Need Help?</span>
        </div>
        <p id="new-cust">New To XYZ?</p>
        <a href="signin.php" id="sign-btn-2"><button id="sign-in-btn-2">Create Your Account</button></a>
    </div>
    <div class="conditions-aply">
        <div class="first-apply">
            <a href="">Conditions of use</a>
            <a href="">Private Policy</a>
            <a href="">Help</a>
        </div>
        <p>All right reserved @ Copyright <a href="">VerveGen Tech</a></p>
    </div>


    <!-- ================ -->
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

<?php
$conn = mysqli_connect("localhost", "root", "", "usafirstzone");

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['upassword'];

    // Sanitize input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the input is an email address
    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM login_table WHERE email = '$username' AND password = '$password'";
    } else {
        $query = "SELECT * FROM login_table WHERE contact = '$username' AND password = '$password'";
    }

    $result = mysqli_query($conn, $query);

    if ($result) {
        $fetch = mysqli_fetch_array($result);
        if ($fetch) {
            ?>
            <script>
            alert('Successfull');
            window.location.href="index.php";
        </script>
        <?php
            exit();
        } else {
            echo '<script>alert("Data not matching.")</script>';
        }
    } else {
        echo '<script>alert("Query failed.")</script>';
    }
}
?>
