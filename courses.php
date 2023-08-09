<?php

require_once 'connection.php';
$sql = "SELECT  * FROM courses";
$all_product = $conn->query($sql);

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
/* Updated styles for course cards */
.content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
}

.course {
    width: calc(40% - 10px);
    margin: 10px;
    padding: 20px;
    border: 1px solid #e1e1e1;
    border-radius: 10px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.course:hover {
    transform: translateY(-5px);
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
}

.course img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

.course h2 {
    margin: 10px 0;
    font-size: 1.25rem;
    color: #333;
}

.course p {
    margin: 0;
    color: #777;
}

.learn-more-button {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.learn-more-button:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    .course {
        width: calc(36.2% - 10px); /* Two courses per row on small screens */
    }
}
@media (max-width: 428px) { /* iPhone 12 Pro screen width */
    .course {
        width: calc(36% - 10px); /* Two courses per row on iPhone 12 Pro screens */
    }
}
@media (max-width: 844px) { /* Small screen size (390 by 844) */
    .course {
        width: calc(38% - 20px); /* Two courses per row on small screens */
    }
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

            <div class="content">
                        <?php
                    while ($row = mysqli_fetch_assoc($all_product)) {
                        ?>


                                <div class="course">
                                <img src="<?php echo $row["courseimage"]; ?>" alt="Product 1">
                                    <h2><?php echo $row["coursename"]; ?></h2>
                                    <p class="courseprice">$.<?php echo $row["courseprice"]; ?></p>
                                    <a href="coursedetails.php?courseId=<?php echo $row['courseid']; ?>" class="learn-more-button">Learn More</a>
                                </div>


                    <?php
                    }
                    ?>

            </div>

        
                        <footer class="slide-in-footer">
                            <div class="footer-content">

                            <div class="social-icons">
                                <a href="https://www.instagram.com/toptraderkenya/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.tiktok.com/@toptraderkenya"><i class="fab fa-tiktok"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=+1234567890"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://t.me/toptraderkenya"><i class="fab fa-telegram"></i></a>
                            </div>

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
