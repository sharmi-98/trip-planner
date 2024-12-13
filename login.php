<?php
include("config.php");
session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $myemail = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    // Corrected SQL query (removed the extra $ sign)
    $sql = "SELECT * FROM login WHERE email = '$myemail' AND password = '$mypassword'";

    // Execute the query
    $result = mysqli_query($db, $sql);

    // Check if the query was successful
    if ($result === false) {
        die('Error executing query: ' . mysqli_error($db));
    }

    // Check the number of rows returned
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Correctly set the session variable
        $_SESSION['login_user'] = $myemail;
        header("location:trip.php");
    } else {
        // Show an error message if credentials are invalid
        echo "<script>alert('The email or password you entered is invalid.'); window.location='index.php';</script>";
    }
}
?>
