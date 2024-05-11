<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $city = $_POST["city"];
    $town = $_POST["town"];

    // Connect to the database
    $conn = new mysqli("localhost", "username", "password", "database_name");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO cities_towns (city, town) VALUES ('$city', '$town')";

    if ($conn->query($sql) === TRUE) {
        echo "City and Town added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
