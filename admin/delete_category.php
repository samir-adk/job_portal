<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h2>Categories</h2>

    <!-- Category Form -->
    <form method="POST" action="add_category.php">
        <label for="category_name">Category Name:</label>
        <input type="text" id="category_name" name="category_name" required>
        <input type="submit" name="add_category" value="Add Category">
    </form>

    <!-- Display Existing Categories -->
    <?php
    include "../connection.php";

    // Fetch existing categories from the database
    $fetch_categories_query = "SELECT * FROM category";
    $categories_result = $connection->query($fetch_categories_query);

    if ($categories_result && $categories_result->num_rows > 0) {
        echo "<h3>Existing Categories:</h3>";
        echo "<ul>";

        while ($category_data = $categories_result->fetch_assoc()) {
            echo "<li>";
            echo htmlspecialchars($category_data['category_name']);
            echo " - <a href='edit_category.php?category_id={$category_data['category_id']}'>Edit</a>";
            echo " | <a href='delete_category.php?category_id={$category_data['category_id']}'>Delete</a>";
            echo "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>No categories found.</p>";
    }
    ?>

</body>
</html>
