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

	$query = "SELECT * FROM events";
	$result = mysqli_query($conn, $query);

	// Output a table with a header row and data rows
	echo "<table border='1'>";
	echo "<tr><th>Date</th><th>Location</th><th>Description</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr><td>{$row['event_date']}</td><td>{$row['event_location']}</td><td>{$row['description']}</td></tr>";
	}
	echo "</table>";

	// Close the connection
	$conn->close();
?>
</body>
</html>
