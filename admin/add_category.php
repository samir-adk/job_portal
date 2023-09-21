<?php
include "../connection.php";

if (isset($_POST['add_category'])) {
    $category_name = $_POST['category_name'];

    // Insert the new category into the database
    $insert_category_query = "INSERT INTO category (category_name) VALUES ('$category_name')";

    if ($connection->query($insert_category_query) === TRUE) {
        echo "Category '$category_name' added successfully!";
        header("Location: list_category.php");
        exit();
    } else {
        echo "Error adding category: " . $connection->error;
    }
}
?>
