<?php
session_start();
require_once 'connection.php';

$errorMessage = "";

if (!isset($_SESSION['admin_authenticated']) || $_SESSION['admin_authenticated'] !== true) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $courseName = $_POST['courseName'];
    $courseId   = $_POST['courseId'];

    $coursePrice = $_POST['coursePrice'];
    $courseDescription = $_POST['courseDescription'];

    // Upload course image
    $courseImage = $_FILES['courseImage']['name'];
    $courseImageTmp = $_FILES['courseImage']['tmp_name'];
    $imagePath = 'images/' . $courseImage;
    move_uploaded_file($courseImageTmp, $imagePath);

    // Upload course document
    $courseDocument = $_FILES['courseDocument']['name'];
    $courseDocumentTmp = $_FILES['courseDocument']['tmp_name'];
    $documentPath = 'courses/' . $courseDocument;
    move_uploaded_file($courseDocumentTmp, $documentPath);

    // Check if course ID already exists
    $checkSql = "SELECT courseid FROM courses WHERE courseid = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("s", $courseId);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        $errorMessage = "Course ID already exists. Please choose a different ID.";
    } else {
        // Insert data into the database
        $insertSql = "INSERT INTO courses (courseimage, coursename, courseid, courseprice, coursedescription, course_document) VALUES (?, ?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("sssdss", $imagePath, $courseName, $courseId, $coursePrice, $courseDescription, $documentPath);
        $insertStmt->execute();

        // Redirect back to course management page
        header("Location: coursemanage.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">

</head>
<body>

<?php if (!empty($errorMessage)) : ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?php echo $errorMessage; ?>',
       
       
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'coursemanage.php'; // Redirect after clicking "OK"
            }
       
       
        });

    </script>
<?php endif; ?>

</body>
</html>
