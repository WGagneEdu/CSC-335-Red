<!DOCTYPE html>

<html lang="en">

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

	$query = "SELECT * FROM reviews";
        $result = mysqli_query($conn, $query);

        // Output table
        echo "<table border='1'>";
        echo "<tr><th>Item Id</th><th>Rating</th><th>Review Text</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['item_id']}</td><td>{$row['rating']}</td><td>{$row['review_text']}</td></tr>";
        }
        echo "</table>";

        // Close the connection
        $conn->close();

