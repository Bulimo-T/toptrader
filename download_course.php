<?php
require_once 'connection.php';

if (isset($_GET['courseId'])) {
    $courseId = $_GET['courseId'];

    // Retrieve the payment status from the database
    $stmt = $conn->prepare("SELECT payment_status, course_document FROM courses WHERE courseid = ?");
    $stmt->bind_param("s", $courseId);
    $stmt->execute();
    $stmt->bind_result($paymentStatus, $courseDocumentPath);
    $stmt->fetch();
    $stmt->close();

    if ($paymentStatus === 'paid') {
        if ($courseDocumentPath) {
            // Initiate the file download
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($courseDocumentPath));
            readfile($courseDocumentPath);
            exit;
        } else {
            // Course document not found
            echo "Course document not found.";
        }
    } else {
        // User has not paid, show an error message or redirect to payment page
        echo "You have not paid for this course. Please make a payment to access the course document.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>
