<?php
// get_models.php

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

// Retrieve the selected brand from the GET request
$selectedBrand = $_GET["brand"];

// SQL query to retrieve mobile models for the selected brand
$sql_models = "SELECT model FROM android WHERE brand = ?";
$stmt = $conn->prepare($sql_models);
$stmt->bind_param("s", $selectedBrand);
$stmt->execute();
$result_models = $stmt->get_result();

// Fetch the models and store them in an array
$models = [];
while ($row = $result_models->fetch_assoc()) {
    $models[] = $row;
}

// Close the database connection
$stmt->close();
$conn->close();

// Send the models as JSON response
header("Content-Type: application/json");
echo json_encode($models);
?>
