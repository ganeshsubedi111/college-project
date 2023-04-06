 <?php
 include'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Sign Up</header>
            <form action="signup.php" method="POST">
                <div class="name-details">
                    <div class="field input">
                        <input type="text" name="name" placeholder="Enter your fullname here" >
                    </div>
                    <div class="field input">
                        <input type="text" name="uname" placeholder="Enter your username here" >
                        
                    </div>
                    
                
                
                    <div class="field input">
                        <input type="email" name="email" placeholder="Enter your email here" >
                       
                    </div>
                   
                 
                 
                    <div class="field input">
                        <input type="password" name="password" placeholder="Enter your password here" >
                    </div>
                    <div class="field input">
                        <input type="password" name="con-password" placeholder="Confirm password here" >
                        
                    </div>
                    <?php if(isset($errors)) { ?>
                    <div class="error-message"><?php echo $errors; ?></div>
                    <?php } ?>

             <!-- display success message if set -->
                    <?php if(isset($success)) { ?>
                    <div class="success-message"><?php echo $success; ?></div>
                    <?php } ?>
                    
                    <div class="field button">
                        <input type="submit" name="submit" value="Create account">
                    </div>

                    

                </div>
            </form>
            <div class="link">
                Already Signup ? <a href="login.php">Login </a>
            </div>
        </section>
    </div>
    
</body>

</html>

