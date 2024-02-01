<?php
// Database connection settings
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "usafirstzone"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_GET['brand'])) {
    $selectedBrand = $_GET['brand'];

    $sql = "SELECT model, image, price FROM android WHERE brand = '$selectedBrand'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="container">';
        echo '<h1 class="my-4">' . $selectedBrand . ' Mobile Models</h1>';
        echo '<div class="row">';

        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-4">';
            echo '<div class="card mb-4">';
            echo '<div class="card-body">';
            echo '<img src="../android_images/' . $row["image"] . '" class="card-img-top" alt="Mobile Image" height="100px">';
            echo '<h5 class="card-title">' . $row["model"] . '</h5>';
            echo '<p class="card-text">Price: ' . $row["price"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>'; // Close row
        echo '</div>'; // Close container
    } else {
        echo '<h1>No Mobile Models Available</h1>';
        echo "<a href='index.php'>Go back Home</a>";
    }
} else {
    echo '<script type="text/javascript">alert("Please select a Brand");window.location= "index.html"</script>';
}

$conn->close();
