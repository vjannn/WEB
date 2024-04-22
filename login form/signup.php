<?php
    include('connection.php');

    if (isset($_POST['password'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Check if the email is already registered
        $sql = "SELECT * FROM signup1 WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<script>alert("Email already exists.");</script>';
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $insert_sql = "INSERT INTO signup1 (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
            if (mysqli_query($conn, $insert_sql)) {
                // Redirect to welcome page after successful registration
                header("Location: login.php");
                exit();
            } else {
                echo '<script>alert("Failed to register. Please try again later.");</script>';
            }
        }
    }
?>