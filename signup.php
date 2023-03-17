<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$username = $_POST['username'];
$pasword = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Check if username already exists
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "Username already exists";
} else {
  // Insert new user into database
  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email','$phone)";
  if (mysqli_query($conn, $sql)) {
    echo "User registered successfully";
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>