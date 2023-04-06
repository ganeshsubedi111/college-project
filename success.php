<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['password'];

//  variable for storing error
    $errors="";
    if( empty($username) || empty($password)) {
        $errors = "All fields are required.";
    } else {


    // check if username is in database or not
    $sql = "SELECT * FROM registration WHERE Username = '$username'";
    $result = mysqli_query($con, $sql);
    $ucount = mysqli_num_rows($result);

    if ($ucount == 0) {
        $errors="Account not available. please sign up first below";
        
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($row['Password'] == $password) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sendusername'] = $username;
            header("location:home.html");
        } else {
            $errors=" * Invalid Password";
        }
    }
}
}
