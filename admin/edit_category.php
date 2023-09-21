<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
    <h2>Edit Category</h2>
    <?php
    include "../connection.php";

    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];

        // Fetch the category data
        $fetch_category_query = "SELECT * FROM category WHERE category_id = $category_id";
        $category_result = $connection->query($fetch_category_query);

        if ($category_result && $category_result->num_rows > 0) {
            $category_data = $category_result->fetch_assoc();

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
                // Handle category update here
                $new_category_name = $_POST['category_name'];

                $update_category_query = "UPDATE category SET category_name = '$new_category_name' WHERE category_id = $category_id";
                if ($connection->query($update_category_query) === TRUE) {
                    echo "Category updated successfully.";
                } else {
                    echo "Error updating category: " . $connection->error;
                }
            }
    ?>
            <form method="POST">
                <label for="category_name">Category Name:</label>
                <input type="text" id="category_name" name="category_name" value="<?php echo htmlspecialchars($category_data['category_name']); ?>" required>
                <br>
                <input type="submit" name="update" value="Update Category">
            </form>
    <?php
        } else {
            echo "Category not found.";
        }
    } else {
        echo "Category ID not provided.";
    }
    ?>
    <br>
    <a href="add_category.php">Back to Categories</a>
</body>
</html>
