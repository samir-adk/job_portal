<?php
include 'connection.php'; // Include your database connection script

// SQL query to retrieve categories from your 'category' table
$query = "SELECT category_name FROM category"; // Modify the query as needed

// Execute the query
$result = mysqli_query($connection, $query);

// Initialize an empty array to store categories
$categories = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row['category_name'];
    }
}

// Convert the categories array to JSON and send it as the response
echo json_encode($categories);

// Close the database connection
mysqli_close($connection);
?>
