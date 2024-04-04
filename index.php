<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury cars collection</title>
    <style>
        /* Basic CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-image: url('https://i.pinimg.com/originals/35/74/9d/35749d04786558a60182d837b1b82604.jpg'); /* Replace 'banner.jpg' with the path to your banner image */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        nav {
            text-align: center;
            margin: 20px 0;
        }
        nav a {
            text-decoration: none;
            color: #fff; /* Changed the color to white */
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #ccc;
            color: #333; /* Changed the color to dark gray */
        }
        .content {
            padding: 20px;
        }
        .article {
            margin-bottom: 40px;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
        }
        .article h3 {
            text-align: center;
        }
        .article img {
            display: block;
            margin: 0 auto;
            max-width: 400px;
            height: 300px;
            border-radius: 5px;
        }
        .article p {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Luxury cars collection</h1>
        <nav>
            <!-- Corrected the href values -->
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    
    <div class="content" id="home">
        <h2>Welcome to Luxury cars collection</h2>
        <p>🌟 Welcome to Luxury Cars Collection, where car dreams come to life. Drench yourself in a world of unparalleled style and execution as you investigate our handpicked determination of extravagance vehicles, fastidiously curated to surpass your desires. With master instructional exercises and articles custom-made to both prepared devotees and first-time buyers, our point is to enable your travel through the complicated world of extravagance car possession. Connect our energetic community of like-minded devotees, where you'll share encounters, look for exhortation, and interface with others who share your adore for car brilliance. Begin your experience nowadays at Extravagance Cars Collection and hoist each drive to unused statures of extravagance and advancement. </p>
        
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = ""; // Assuming no password set for the root user
        $database = "website"; // Replace with your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch article data from the database
        $sql = "SELECT title, image_url, content FROM articles";
        $result = $conn->query($sql);

        // Execute SQL query
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Display article content
                echo "<div class='article'>";
                echo "<h3>" . $row["title"] . "</h3>";
                echo "<img src='" . $row["image_url"] . "' alt='Car'>";
                echo "<p>" . $row["content"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No articles found";
        }

        // Close connection
        $conn->close();
        ?>
    </div>
    
    
</body>
</html>
