<?php
session_start();
if (!isset($_SESSION['admin_authenticated']) || $_SESSION['admin_authenticated'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Course Management</title>
    <link rel="stylesheet" type="text/css" href="admin_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="coursemanage.css">

</head>
<body>
    <header>
        <h1>Top Trader Kenya</h1>
    </header>
    <nav>
        <ul>
            <li><a href="admin_dashboard.php">Home</a></li>
            <li><a href="merch_management.php">Merch Management</a></li>
            <li><a href="coursemanage.php">Courses Management</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h3>Add New Course</h3>
            <form action="add_course.php" method="post" enctype="multipart/form-data">
                <label for="courseName">Course Name:</label>
                <input type="text" id="courseName" name="courseName" required><br><br>

                <label for="courseId">Course ID:</label>
                <input type="text" id="courseId" name="courseId" required><br><br>
                
                <label for="coursePrice">Course Price:</label>
                <input type="number" id="coursePrice" name="coursePrice" required><br><br>
                
                <label for="courseDescription">Course Description:</label><br>
                <textarea id="courseDescription" name="courseDescription" rows="4" cols="50" required></textarea><br><br>
                
                <label for="courseImage">Course Image:</label>
                <input type="file" id="courseImage" name="courseImage" accept="image/*" required><br><br>
                
                <label for="courseDocument">Course Document:</label>
                <input type="file" id="courseDocument" name="courseDocument" accept=".pdf,.doc,.docx" required><br><br>
                
                <button type="submit">Add Course</button>
            </form>
        </section>
    </main>
    <footer class="slide-in-footer">
        <div class="footer-content">
            <div class="footer-copyright">
                &copy; <?php echo date("Y"); ?> Top Trader Kenya. All rights reserved.
            </div>
        </div>
    </footer>
    <script>
        // JavaScript code for footer display...
    </script>
</body>
</html>
