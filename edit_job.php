<?php
include "connection.php";

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    $fetch_post = "SELECT * FROM post WHERE id = '$edit_id'";
    $post_query = $connection->query($fetch_post);
    $post_data = $post_query->fetch_assoc();

    if (!$post_data) {
        echo "Post not found.";
        exit();
    }
}

if (isset($_POST['update'])) {
    $updated_title = isset($_POST['job_title']) ? $_POST['job_title'] : '';
    $updated_description = isset($_POST['description']) ? $_POST['description'] : '';
    $updated_category = isset($_POST['category']) ? $_POST['category'] : '';

    $update_query = "UPDATE post SET job_title = '$updated_title', description = '$updated_description', job_category_id = '$updated_category' WHERE id = '$edit_id' ";

    if ($connection->query($update_query) === TRUE) {
        echo "Post updated successfully!";
    } else {
        echo "Error updating post: " . $connection->error;
    }
}

$fetch_categories = "SELECT * FROM category";
$category_query = $connection->query($fetch_categories);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
<div class="container">
    <div class="title">
        <h2>Edit Post</h2>
    </div>
    <div class="post">
        <form method="POST" action="edit_job.php">
            <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>">
            <label for="job_title">Job Title</label>
            <input type="text" name="job_title" value="<?php echo isset($post_data['job_title']) ? $post_data['job_title'] : ''; ?>">
            <label for="description">Description</label>
            <textarea name="description"><?php echo isset($post_data['description']) ? $post_data['description'] : ''; ?></textarea>
            <label for="category">Category</label>
            <select name="category">
                <?php
                while ($category_row = $category_query->fetch_assoc()) {
                    $category_id = $category_row['category_id'];
                    $category_name = $category_row['category_name'];
                    $selected = ($category_id == $post_data['job_category_id']) ? "selected" : "";
                    echo "<option value='$category_id' $selected>$category_name</option>";
                }
                ?>
            </select>
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</div>
</body>
</html>
