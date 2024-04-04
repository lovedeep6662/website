<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Luxury cars collection</title>
    <style>
        /* Basic CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-image: url('https://i.pinimg.com/originals/35/74/9d/35749d04786558a60182d837b1b82604.jpg');
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
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #ccc;
            color: #333;
        }
        .content {
            padding: 20px;
            text-align: center; /* Center align content */
        }
        .contact-info {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Luxury cars collection</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    
    <div class="content">
        <h2>Contact Us</h2>
        
        <!-- Display Contact Information -->
        <div class="contact-info">
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

            // Fetch contact information from the database
            $sql = "SELECT email, phone FROM company_contacts";
            $result = $conn->query($sql);

            // Display contact information
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<p>Email: " . $row["email"] . "</p>";
                    echo "<p>Phone: " . $row["phone"] . "</p>";
                }
            } else {
                echo "No contact information found";
            }

            // Close connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
