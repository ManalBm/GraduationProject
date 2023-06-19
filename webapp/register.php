
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
 

<!----------------------------- Form box ----------------------------------->    
<div class="container">
    <div class="form-box">
         <!------------------- registration form -------------------------->

        <?php 

         include("php/config.php");
         if(isset($_POST['login'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password =$_POST['password'];
           

                //verifying the unique email
                
                $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

                if(mysqli_num_rows($verify_query) !=0 ){
                    echo "<div class='message'>
                              <p>This email is used, Try another One Please!</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                 }
                 else{
        
                    mysqli_query($con,"INSERT INTO users(Username,Email,Tel,Password) VALUES('$firstname','$lastname','$email','$password')") or die("Erroe Occured");
        
                    echo "<div class='message'>
                              <p>Registration successfully!</p>
                          </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Login Now</button>";
                 
        
                 }
          }else{
            
            ?>


    
           
            <header>Sign Up</header>
            <form method="post" action="" >
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Firstname">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>

            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            

            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                
            </div>
            </form>
        </div>
        <?php } ?>
    </div>
 




</body>
</html>