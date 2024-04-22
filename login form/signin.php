<?php
// Include the database connection file
include('connection.php');

// Check if the form is submitted
if (isset($_POST['email'])) {
    // Retrieve form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to fetch user with provided email
    $sql = "SELECT * FROM signup1 WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, redirect to dashboard or another page
            header("Location: dashboard.html");
            exit();
        } else {
            // Password is incorrect
            echo '<script>alert("Incorrect password. Please try again.");</script>';
        }
    } else {
        // User with provided email doesn't exist
        echo '<script>alert("User with this email does not exist.");</script>';
    }
}
?>