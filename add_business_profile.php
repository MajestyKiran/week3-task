<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $business_name = $_POST["business_name"];
    $description = $_POST["description"];
    $city = $_POST["city"];
    $category = $_POST["category"];

    // Connect to the database
    $conn = new mysqli("localhost", "username", "password", "database_name");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO business_profiles (business_name, description, city, category) VALUES ('$business_name', '$description', '$city', '$category')";

    if ($conn->query($sql) === TRUE) {
        echo "Business profile added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
