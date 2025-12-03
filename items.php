<head>
  <meta charset="UTF-8" />
  <title>Art Gallery</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="stylesheet.css">
</head>
<header>
 <ul>
  <li><a href="homePage.php">Home</a></li>
  <li><a href="items.php">Items</a></li>
  <li><a href="reviews.php">Reviews</a></li>
  <li><a href="login.php">Login</a></li>
</ul>
</header>
<body>
<?php
include './dbConnection.php';

        $query = "SELECT * FROM art_items";
        $result = mysqli_query($conn, $query);

        // Output a table
        echo "<table border='1'>";
        echo "<tr><th>Id</th><th>Valued at</th><th>Description</th><th>Image</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['id']}</td><td>{$row['value']}</td><td>{$row['description']}</td><td></td></tr>";
        }
        echo "</table>";

        // Close the connection
        $conn->close();
?>
</body>
</html>

