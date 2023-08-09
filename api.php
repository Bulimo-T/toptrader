<?php
$servername = "localhost";
$username = "your_db_user";
$password = "your_db_password";
$dbname = "toptraderdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get merch items
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM merch";
    $result = $conn->query($sql);

    $merchItems = [];
    while ($row = $result->fetch_assoc()) {
        $merchItems[] = $row;
    }

    echo json_encode($merchItems);
}

// Add new merch item
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $merchname = $data['merchname'];
    $merchprice = $data['merchprice'];
    // Add more fields as needed

    $sql = "INSERT INTO merch (merchname, merchprice) VALUES ('$merchname', '$merchprice')";
    if ($conn->query($sql) === TRUE) {
        $response = ["message" => "Merch item added successfully"];
    } else {
        $response = ["error" => "Error adding merch item: " . $conn->error];
    }

    echo json_encode($response);
}

$conn->close();
?>
