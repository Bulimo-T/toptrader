<!DOCTYPE html>
<html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>TP Trader Kenya</title>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <link rel="stylesheet" href="index.css">

                <style>
        /* CSS for small screens */
        @media(max-width: 768px) {
            .content {
                display: flex;
                flex-direction: column;
            }

            .about-section {
                order: 1; 
            }

            .market-section {
                order: 2;
            }

            .about-more {
                display: none; /* Hide additional content by default */
                padding-top: 10px;
                transition: max-height 0.3s ease-in-out;
            }
            .read-more {
                display: block;
                cursor: pointer;
                margin-top: 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 8px 16px;
                border-radius: 4px;
                text-align: center;
                text-decoration: none;
                font-size: 16px;
                transition: background-color 0.3s ease-in-out;
            }

            
            .read-more:hover {
                background-color: #45a049;
            }

            .show .about-more {
                max-height: 500px; /* Adjust the max-height as needed to display the content */
            }

                        /* Style for the "Read Less" state */
                        .show .read-more::after {
                content: "\f106"; /* Unicode for the "angle-up" icon (font-awesome) */
                font-family: "Font Awesome 5 Free";
                margin-left: 5px;
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

    <div class="about-section">
            <h1>About Us</h1>
            <p>
                Welcome to Top Trader Kenya! We are your trusted forex trading partner, offering top-notch education and expert guidance to help you succeed in the dynamic world of forex.
            </p>
            <div class="about-more" id="about-more">
                <h2>Why Choose Us?</h2>
                <p>
                    Experienced Traders: Learn from seasoned traders with a passion for teaching.<br>
                    Comprehensive Courses: From basics to advanced strategies, we've got you covered.<br>
                    Practical Learning: Gain hands-on experience through live sessions and real-time analysis.<br>
                    Personalized Support: Our team is here to guide you every step of the way.<br>
                    Thriving Community: Join our network of traders to share insights and grow together.<br>
                    Unlock the potential of forex trading with TP Trader Kenya today!
                </p>
            </div>
            <button class="read-more" id="read-more-btn" onclick="toggleAboutMore()">Read More</button>
        </div>


                <div class="market-section">
                    <h2>Trading Market</h2>
                    <p id="market-data"></p>

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                        {
                        "interval": "1m",
                        "width": 351,
                        "isTransparent": false,
                        "height": 450,
                        "symbol": "OANDA:EURUSD",
                        "showIntervalTabs": true,
                        "locale": "en",
                        "colorTheme": "dark"
                        }
                        </script>
                        </div>
                        <!-- TradingView Widget END -->

                    
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



<script>
        // JavaScript to handle "Read More" functionality
        function toggleAboutMore() {
            const aboutMore = document.getElementById("about-more");
            const readMoreBtn = document.getElementById("read-more-btn");

            if (aboutMore.style.display === "none" || aboutMore.style.display === "") {
                aboutMore.style.display = "block";
                readMoreBtn.innerText = "Read Less";
            } else {
                aboutMore.style.display = "none";
                readMoreBtn.innerText = "Read More";
            }
        }
    </script>



</body>

</html>
