<?php
require_once 'connection.php';

if (isset($_GET['courseId'])) {
    $courseId = $_GET['courseId'];

    // Use a prepared statement
    $stmt = $conn->prepare("SELECT * FROM courses WHERE courseid = ?");
    $stmt->bind_param("s", $courseId); // Assuming 'id' is an integer; use "i" if it's an integer

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $course = $result->fetch_assoc();
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>TP Trader Kenya</title>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <link rel="stylesheet" href="index.css">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("images/111.jpg"); 
    }

    .course-details {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center; /* Center align text */
    }

    .course-details img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .course-details h2 {
        margin: 10px 0;
        font-size: 1.5rem;
        color: #333;
    }

    .course-details p.courseprice {
        margin: 0;
        color: #777;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .course-details p {
        color: #555;
        line-height: 1.5;
    }

    .back-button,
    .buy-button {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .back-button {
        background-color: #007bff;
        color: white;
        margin-right: 10px;
    }

    .buy-button {
        background-color: #28a745;
        color: white;
    }

    /* Center buttons horizontally */
    .center-buttons {
        text-align: center;
    }
</style>

</head>
<body>
                           <header>
                                <div class="logo-container">
                                    <div class="logo">
                                        <img src="images/logo.png" alt="Top Trader Kenya">
                                    </div>
                                    <div class="company-name">Top Trader Kenya</div>
                                </div>
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="courses.php">Courses</a></li>
                                    <li><a href="merch.php">Merch</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                    </header>
    <?php if (isset($course)) : ?>
        <div class="course-details">
            <img src="<?php echo $course["courseimage"]; ?>" alt="Course Image">
            <h2><?php echo $course["coursename"]; ?></h2>
            <p class="courseprice">$.<?php echo $course["courseprice"]; ?></p>
            <p><?php echo $course["coursedescription"]; ?></p>
            <a href="courses.php" class="back-button">Back</a>
            <a href="download_course.php?courseId=<?php echo $course['courseid']; ?>" class="buy-button">Buy</a>
        </div>
    <?php else : ?>
        <p>Course not found.</p>
    <?php endif; ?>

    <!-- Include your footer and script tags here -->
</body>
</html>
