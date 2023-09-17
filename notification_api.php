<?php
include 'connection.php'; // Include your database connection file here

// Query to fetch notifications from the "job_title" table
$sql = "SELECT * FROM post";

// Execute the query
$result = $connection->query($sql);

// Initialize an empty array to store notifications
$notifications = [];

// Fetch notifications and add them to the array
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
} else {
    // Handle any errors that may occur during the query execution
    $notifications = ['error' => 'Error fetching notifications'];
}

// Close the database connection
$connection->close();

// Send notifications data as JSON
header('Content-Type: application/json');
echo json_encode($notifications);
?>
