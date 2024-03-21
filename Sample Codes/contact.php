<?php
// Database connection

$con = mysqli_connect('localhost', 'root', '', 'myonlinestore');


// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if it's a sign-up or login request
    if (isset($_POST['signupForm'])) {
        // Sign-up (registration) processing
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];

        // SQL query to insert user data into the database
        $sql = "INSERT INTO `profile` (`username`, `password`, `firstname`, `lastname`, `mobile`, `address`, `email`) VALUES ('$username', '$password', '$firstname', '$lastname', '$mobile', '$address', '$email')";

        // Execute the query
        $result = mysqli_query($con, $sql);

        // Check if the query was successful
        if ($result) {
            echo "Registration successful"; // Display a success message
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con); // Display an error message
        }
    } elseif (isset($_POST['loginForm'])) {
        // Login processing
        $username = $_POST['username'];
        $password = $_POST['password'];

        // SQL query to check if the username and password match
        $sql = "SELECT * FROM profile WHERE username='$username' AND password='$password'";

        // Execute the query
        $result = mysqli_query($con, $sql);

        // Check if a row was found matching the username and password
        if (mysqli_num_rows($result) == 1) {
            echo "Login successful"; // Display a success message
        } else {
            echo "Username and password do not match"; // Display a failure message
        }
    }
}

// Close the database connection
mysqli_close($con);
?>
