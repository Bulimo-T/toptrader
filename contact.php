<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Top Trader Kenya</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="index.css">

    <style>
.contact-section {
    display: flex;
    flex-direction: row;
    padding: 50px;
}

.left-section, .right-section {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.left-section {
    padding-right: 80px;
}


    /* Styling for Contact Form */
    .contact-form {
    max-width: 600px;
    width: 100%;
    margin: 0 auto;
    padding: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}


    .contact-form h2 {
        margin-bottom: 20px; /* Increase the margin for better spacing */
    }

    .contact-form label {
        display: block;
        margin-bottom: 10px; /* Increase the margin for better spacing */
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px; /* Increase padding for better input size */
        margin-bottom: 15px; /* Increase the margin for better spacing */
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .contact-form button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 12px 24px; /* Increase padding for better button size */
        border-radius: 4px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: #45a049;
    }

    /* Styling for Contact Icons */
    .contact-icons {
        margin-top: 20px;
        text-align: center;
    }

    .contact-icons h3 {
        margin-bottom: 10px;
        color: white;
    }

    .icons a {
        color: white;
        font-size: 24px;
        margin: 0 10px;
    }

    .icons a:hover {
        color: orange;
    }

.right-section {
    padding-left: 50px;
}
.contact-form {
        max-width: 500px;
        margin: 0 auto; /* Center the form horizontally within the available space */
    }

    /* Use media queries to adjust the layout for different screen sizes */

    /* For screens smaller than 768px (e.g., mobile devices) */
    @media screen and (max-width: 767px) {
        .contact-section {
            flex-direction: column; /* Stack the sections vertically */
            padding: 20px; /* Reduce padding between sections */
        }
        .left-section, .right-section {
            padding: 0; /* Remove padding on the sides */
        }
        .left-section {
            padding-bottom: 20px; /* Add some bottom padding to separate the form and icons */
        }
        .contact-form {
        max-width: 300px;
        margin: 0 auto; /* Center the form horizontally within the available space */
    }
    .icons a:hover {
        color: yellow;
    }
    }

    /* For screens between 768px and 1200px (e.g., tablets) */
    @media screen and (min-width: 768px) and (max-width: 1200px) {
        .contact-section {
            flex-direction: column; /* Stack the sections vertically */
            padding: 20px; /* Reduce padding between sections */
        }
        .left-section, .right-section {
            padding: 0; /* Remove padding on the sides */
        }
        .left-section {
            padding-bottom: 20px; /* Add some bottom padding to separate the form and icons */
        }
        .contact-form {
        max-width: 300px;
        margin: 0 auto; /* Center the form horizontally within the available space */
    }
    .icons a:hover {
        color: yellow;
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
    <div class="contact-section">
        <div class="left-section">
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form action="submit_contact_form.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>
            <div class="contact-icons">
                <h3>Connect with us:</h3>
                <div class="icons">
                    <a href="https://www.instagram.com/toptraderkenya/"><i class="fab fa-instagram"></i></a>
                    <a href="tel:+1234567890"><i class="fas fa-phone"></i></a>
                    <a href="https://t.me/toptraderkenya"><i class="fab fa-telegram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=+1234567890"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="right-section">




<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": false,
  "width": "350",
  "height": "600",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(42, 46, 57, 0)",
  "scaleFontColor": "rgba(134, 137, 147, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "tabs": [
    {
      "title": "Indices",
      "symbols": [
        {
          "s": "FOREXCOM:SPXUSD",
          "d": "S&P 500"
        },
        {
          "s": "FOREXCOM:NSXUSD",
          "d": "US 100"
        },
        {
          "s": "FOREXCOM:DJI",
          "d": "Dow 30"
        },
        {
          "s": "INDEX:NKY",
          "d": "Nikkei 225"
        },
        {
          "s": "INDEX:DEU40",
          "d": "DAX Index"
        },
        {
          "s": "FOREXCOM:UKXGBP",
          "d": "UK 100"
        }
      ],
      "originalTitle": "Indices"
    },
    {
      "title": "Futures",
      "symbols": [
        {
          "s": "CME_MINI:ES1!",
          "d": "S&P 500"
        },
        {
          "s": "CME:6E1!",
          "d": "Euro"
        },
        {
          "s": "COMEX:GC1!",
          "d": "Gold"
        },
        {
          "s": "NYMEX:CL1!",
          "d": "Crude Oil"
        },
        {
          "s": "NYMEX:NG1!",
          "d": "Natural Gas"
        },
        {
          "s": "CBOT:ZC1!",
          "d": "Corn"
        }
      ],
      "originalTitle": "Futures"
    },
    {
      "title": "Bonds",
      "symbols": [
        {
          "s": "CBOT:ZB1!",
          "d": "T-Bond"
        },
        {
          "s": "CBOT:UB1!",
          "d": "Ultra T-Bond"
        },
        {
          "s": "EUREX:FGBL1!",
          "d": "Euro Bund"
        },
        {
          "s": "EUREX:FBTP1!",
          "d": "Euro BTP"
        },
        {
          "s": "EUREX:FGBM1!",
          "d": "Euro BOBL"
        }
      ],
      "originalTitle": "Bonds"
    },
    {
      "title": "Forex",
      "symbols": [
        {
          "s": "FX:EURUSD",
          "d": "EUR to USD"
        },
        {
          "s": "FX:GBPUSD",
          "d": "GBP to USD"
        },
        {
          "s": "FX:USDJPY",
          "d": "USD to JPY"
        },
        {
          "s": "FX:USDCHF",
          "d": "USD to CHF"
        },
        {
          "s": "FX:AUDUSD",
          "d": "AUD to USD"
        },
        {
          "s": "FX:USDCAD",
          "d": "USD to CAD"
        }
      ],
      "originalTitle": "Forex"
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->





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