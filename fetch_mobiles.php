<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "usafirstzone";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['brand'])) {
    $brand = $_GET['brand'];

    // SQL query to retrieve mobiles based on the brand
    $sql = "SELECT image, model, affiliate_links FROM android WHERE brand = '$brand'";

    // Execute the query
    $result = $conn->query($sql);

    // Build the HTML to display mobiles
    $html = '<ul>';
    while ($row = $result->fetch_assoc()) {
        $mobileImage = $row["image"];
        $mobileModel = $row["model"];
        $mobileAffiliateLinks = $row["affiliate_links"];
        $html .= '<li>';
        $html .= '<img src="' . $mobileImage . '" alt="' . $mobileModel . '"><br>';
        $html .= 'Model: ' . $mobileModel . '<br>';
        $html .= 'Affiliate Links: ' . $mobileAffiliateLinks . '<br>';
        $html .= '</li>';
    }
    $html .= '</ul>';

    echo $html;
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
