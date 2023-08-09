<?php
session_start();

// Check if admin is authenticated
if (!isset($_SESSION['admin_authenticated']) || $_SESSION['admin_authenticated'] !== true) {
    header("Location: login.php");
    exit();
}

// Include the database connection
require_once("connection.php");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process and sanitize form data
    $merchName = $_POST["merch_name"];
    $merchId   = $_POST["merch_id"];
    $merchPrice = $_POST["merch_price"];
    $merchDescription = $_POST["merch_description"];
    
    // Handle image upload (you may need to customize this)
    $targetDir = "images/";
    $targetFile = $targetDir . basename($_FILES["merch_image"]["name"]);
    move_uploaded_file($_FILES["merch_image"]["tmp_name"], $targetFile);
    
    // Insert new merchandise record
    $sql = "INSERT INTO merch (merchimage, merchname, merchid, merchprice, merchdescription, status)
    VALUES ('$targetFile', '$merchName', '$merchId', '$merchPrice', '$merchDescription', 'active')";

    
    if ($conn->query($sql) === TRUE) {
        header("Location: merch_management.php"); // Redirect back to merchandise management page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
