<?php
session_start();
 include'dbcon.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conform_password=$_POST['con-password'];
    // variable to store error message
    $errors = "";
    $success = "";
    // check if required fields are empty
    if(empty($name) || empty($username) || empty($email) || empty($password) || empty($conform_password)) {
        $errors = "All fields are required.";
    } else {

    //checking username already exist or not 
    $sql="select * from registration where Username='$username'";
    $result=mysqli_query($con,$sql);
    $ucount=mysqli_num_rows($result);

//checking email already exist or not 
    $sql="select * from registration where Email='$email'";
    $result=mysqli_query($con,$sql);
    $ecount=mysqli_num_rows($result);

    // password hashing
    //$pass= password_hash($password,PASSWORD_BCRYPT);
    //$cpass= password_hash($conform_password,PASSWORD_BCRYPT);


    if($ucount>0){
        $errors=" * Username already taken";
       
       
    }
        
        else if ($ecount>0){
            $errors=" *Email already taken";
            
            
        }
       else if ($password!=$conform_password){
       $errors=" * Password didnot match";
            
            
        }

    else
    {
        // insert user details
       
        
    $sql="insert into registration(Name,Username,Email,Password,Cpassword)values('$name','$username','$email','$password','$conform_password')";
      $result=mysqli_query($con,$sql);
     if($result){
        $success="Register successfully. login Now";
        // header("location:login.php");
      
      }

    }
}
}
?>