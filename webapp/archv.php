
<?php
include "config.php";

if (isset($_POST["submit"])) {
   $N°Ambulance = $_POST['N°Ambulance'];
   $Amb_Id = $_POST['Amb_Id'];
   $N°Zone = $_POST['N°Zone'];
   

   $sql = "INSERT INTO `ambulance` (`N°Ambulance`, `Amb_Id`, `N°Zone`) VALUES (NULL, '$Amb_Id', '$N°Zone') ";

   $result = mysqli_query($con, $sql);

   if ($result) {
      header("Location: add_amblance.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>

<nav class="nav">
    <div class="nav-logo">
            <a href="#"><img src="LogoEmergency.png" width="100px" height="100px"></a>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="Home.php" class="link ">Home</a></li>
                <li><a href="Ambulace.html" class="link" >Ambulace</a></li>
                <li><a href="Archive.html" class="link active">Archive</a></li>
                <li><a href="Contact.html" class="link">Contact</a></li>
                <li><a href="Profile.html" class="link">Profile</a></li>
            </ul>
        </div>

        <div class="nav-button" style="display: flex; justify-content: center; align-items: center;">
            <a href="index.html"> <button class="btn">Log Out</button></a>
        </div>
       
    </nav>
    
    <div class="container">
       <!--<a href="add_new.php" class="btn btn-dark mb-3" style="background: #fff; color: #000; margin-top: 200px;"> Add New</a>-->

       <table class="table table-hover text-center " style="color: #fff; margin-top: 250px;">
            <thead class="table-dark" style="background: #fff; color: #000;">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Zone</th>
                    <th scope="col">Number Injureds</th>
                    <th scope="col">User Account</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">2023/02/28</th>
                    <td>QRHQ+93Q</td>
                    <td>1</td>
                    <td>Boumaza Nadjat</td>
                </tr>
                <tr>
                    <th scope="row">2023/03/19</th>
                    <td>QVVG+RM5</td>
                    <td>5</td>
                    <td>Hani Sanaa</td>
                </tr>
                <tr>
                    <th scope="row">2023/05/10</th>
                    <td>QVMR+59</td>
                    <td>2</td>
                    <td>Didouche Mourad</td>
                    
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" 
crossorigin="anonymous">
</script>
</body>
</html>



