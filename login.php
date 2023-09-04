
<?php
session_start();
include 'connection.php';

if (isset($_POST['login'])) {
    $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Check if both username and password are not empty
    if (!empty($user_name) && !empty($password)) {
        $check_data = "SELECT * FROM users WHERE name='$user_name'AND password='$password'";
        $query = $connection->query($check_data);

        if ($query->num_rows == 1) {
            $_SESSION['logged_user'] = $user_name;
            $fetch_user_id=$query->fetch_assoc();
            $_SESSION['user_id']=$fetch_user_id['user_id'];
            header("Location: index.php");
            exit();
        } else {
            header("Location: login.php");
            exit();
        }
    } else {
        echo "Please provide both username and password.";
    }
}
?>

<!-- Your HTML form remains the same -->
