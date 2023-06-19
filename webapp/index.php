<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
 

<!----------------------------- Form box ----------------------------------->    
<div class="container">
    <div class="form-box">
        
        <!------------------- login form -------------------------->
        <?php 

         include("php/config.php");
         if(isset($_POST['login'])){
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
            $row = mysqli_fetch_assoc($result); 

            if(is_array($row) && !empty($row)){

                $_SESSION['valid'] = $row['Email'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['firstname'] = $row['Firstname'];
                $_SESSION['lastname'] = $row['Lastname'];
                $_SESSION['id'] = $row['Id'];
            }else{
                echo "<div class='message'>
                  <p>Wrong Email or Password</p>
                   </div> <br>";
               echo "<a href='index.php'><button class='btn'>Go Back</button>";
     
            }
            if(isset($_SESSION['valid'])){
                header("Location: Home.php");
            }
          }else{
            
            ?>


     
           
            <header>Login</header>
            <form method="post" action="" >
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" id="email" autocomplete="off" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" id="password" autocomplete="off" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="submit" value="Login" required>
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>

            <div class="top">
                <span>Don't have an account? <a href="register.php">Sign Up</a></span>
            </div>
            </form>
        </div>
            <?php } ?>
    </div>
</body>
</html>