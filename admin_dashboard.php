<?php
session_start();
if (!isset($_SESSION['admin_authenticated']) || $_SESSION['admin_authenticated'] !== true) {
    header("Location: login.php");
    exit();
}

// Handle logout
if (isset($_GET['logout'])) {
    // Clear session variables
    session_unset();
    
    // Destroy the session
    session_destroy();
    
    header("Location: login.php");
    exit();
}


//ekjrgergiueur


// Retrieve the admin's first name from the database
$adminFirstName = $_SESSION['admin_first_name'];

// Determine the time of day
$currentTime = date('H:i:s');
$welcomeMessage = '';

if ($currentTime >= '00:00:00' && $currentTime < '12:00:00') {
    $welcomeMessage = "Good morning, $adminFirstName!";
} elseif ($currentTime >= '12:00:00' && $currentTime < '18:00:00') {
    $welcomeMessage = "Good afternoon, $adminFirstName!";
} else {
    $welcomeMessage = "Good evening, $adminFirstName!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <header>
        <h1>
            Top Trader Kenya
        </h1>
    </header>
    <nav>
        <ul>
            <li><a href="admin_dashboard.php">Home</a></li>
            <li><a href="merch_management.php">Merch Management</a></li>
            <li><a href="coursemanage.php">Courses Management</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="logout.php">LOG OUT</a></li>

            <!-- Add more menu items as needed -->
        </ul>
    </nav>

    
    <main>
    <section>
    <h2><?php echo $welcomeMessage; ?></h2>
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
        // JavaScript to handle footer display
        var footerTimeout;
        var footer = document.querySelector("footer");

        function showFooter() {
            var scrollPosition = window.scrollY;
            var windowHeight = window.innerHeight;
            var fullHeight = document.body.scrollHeight;

            if (scrollPosition + windowHeight >= fullHeight || scrollPosition === 0) {
                footer.style.display = "block";
                resetFooterTimeout();
            } else {
                footer.style.display = "none";
            }
        }

        function hideFooter() {
            footer.style.display = "none";
        }

        function resetFooterTimeout() {
            clearTimeout(footerTimeout);
            footerTimeout = setTimeout(hideFooter, 6000);
        }

        // Show footer when the page is loaded
        window.addEventListener("load", function () {
            footer.style.display = "block";
            resetFooterTimeout();
            setTimeout(hideFooter, 3000);
        });

        window.addEventListener("scroll", function () {
            showFooter();
            resetFooterTimeout();
        });

        window.addEventListener("mousemove", function (event) {
            var windowHeight = window.innerHeight;
            var yPosition = event.clientY;

            if (yPosition >= windowHeight - 20) {
                footer.style.display = "block";
                resetFooterTimeout();
            }
        });
    </script>
</body>
</html>
