<!DOCTYPE html>
<html>
<head>
    <title>Merch Management</title>
    <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>TP Trader Kenya</title>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" type="text/css" href="merch_management.css">
</head>
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
    <nav>
        <!-- Add navigation menu here -->
    </nav>
    
    <main>
        <h2>Merchandise Management</h2>
        
        <!-- Add Merchandise Management Forms here -->
        <section>
            <h3>Add Merchandise</h3>
            <form method="post" action="process_add_merch.php" enctype="multipart/form-data">
                <input type="file" name="merch_image" accept="image/*">
                <input type="text" name="merch_name" placeholder="Merchandise Name">
                <input type="text" name="merch_id" placeholder="Merchandise ID">

                <input type="text" name="merch_price" placeholder="Price">
                <textarea name="merch_description" placeholder="Description"></textarea>
                <button type="submit">Add Merchandise</button>
            </form>
        </section>        
    </main>

    <footer>
    </footer>
</body>
</html>
