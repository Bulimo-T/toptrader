<?php

require_once 'connection.php';
$sql = "SELECT  * FROM merch";
$all_product = $conn->query($sql);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Trader Kenya - Merchandise</title>
    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>


        .merch-section 
        {
            text-align: center;
            padding: 20px;
        }

        .merch-section h1
        {
            color: white;
        }

        .merch-section p
        {
            color: white;
        }

        .merch-items 
        {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .item 
        {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .item:hover 
        {
            transform: translateY(-5px);
        }

        .item img 
        {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .item h2 
        {
            font-size: 20px;
            margin-bottom: 10px;
            color: white;
        }

        .item p 
        {
            font-size: 18px;
            margin-bottom: 10px;
            color: white;
        }

        .buy-btn 
        {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .buy-btn:hover 
        {
            background-color: #45a049;
        }


@media screen and (max-width: 480px) 
{
    .merch-items 
    {
        justify-content: space-between;
    }

    .item 
    {
        width: calc(43% - 20px);
    }
}


    </style>
</head>

<body>

    <header>
        <div class="logo-container">
            <div class="logo">
                <img src="images/logo.png" alt="TP Trader Kenya">
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
    <div class="merch-section">
            <h1>Top Trader Merchandise</h1>
            <p>Get some swag from top trader</p>
            <div class="merch-items">
    <?php
    while ($row = $all_product->fetch_assoc()) 
    {
    ?>
    <div class="item">
        <img src="<?php echo $row["merchimage"]; ?>" alt="Merch Item 1">
        <h2><?php echo $row["merchname"]; ?></h2>
        <p>Price: ksh <?php echo $row["merchprice"]; ?></p>
        <a href="https://api.whatsapp.com/send?phone=+254112623997&text=<?php echo urlencode("I hope you're well. I've had my eye on the " . $row["merchname"] . " featured on your website and I'm really keen to make a purchase. Could you please let me know if it's currently available? Additionally, I'm wondering if the " . $row["merchname"] . " comes in different colors."); ?>" class="buy-btn">Buy Now</a>
    </div>
    <?php
    }
    ?>
</div>

        </div>
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
