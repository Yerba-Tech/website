<?php

// Database connection parameters
$servername = "your_database_server";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $info = $_POST["info"];

    // SQL to insert data into the table
    $sql = "INSERT INTO contacto (url, mediaUrl) VALUES ('$fullName', '$email', '$company', "$info')";

    if ($conn->query($sql) === TRUE) {
        // Record inserted successfully, redirect to index.php
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();

?>