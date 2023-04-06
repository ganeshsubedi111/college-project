<?php
include'success.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">
   <link rel=stylesheet href="style.css">

    <title>login</title>

</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>login</header>
            <form action="login.php" method="POST">

                <div class="name-details">

                    <div class="field input">

                        <input type="text" name="uname" placeholder="Enter your Username Here"  >
                    </div>
                    <div class="field input">

                        <input type="password" name="password" placeholder="Enter your password Here"  >

                    </div>
                    <!-- display error message if set -->
               <?php if(isset($errors)) { ?>
              <div class="error-message"><?php echo $errors; ?></div>
              <?php } ?>

                    <div class="field button">
                        <input type="submit"  name="submit"  value="login">
                    </div>

                </div>
            </form>
            <div class="link">
                Dont Have an account? <a href="signup.php">Signup</a>
            </div>
        </section>
    </div>
   
   
</body>

</html>
