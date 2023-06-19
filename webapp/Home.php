<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
    <title>Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
    <div class="nav-logo">
            <a href="#"><img src="LogoEmergency.png" width="100px" height="100px"></a>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="Home.php" class="link active">Home</a></li>
                <li><a href="add_amblance.php" class="link">Ambulace</a></li>
                <li><a href="Archive.html" class="link">Archive</a></li>
                <li><a href="Contact.html" class="link">Contact</a></li>
                <li><a href="Profile.html" class="link">Profile</a></li>
            </ul>
        </div>

        <div class="nav-button">
            <a href="index.html"> <button class="btn">Log Out</button></a>
        </div>
       
    </nav>

    <div class="mapLoacal" style="margin-top: 50px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212084.46973657052!2d2.7148162051438884!3d33.84275648914721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1262e24aa3eed9cb%3A0xa10bf3f60d5a9ac2!2sLaghouat!5e0!3m2!1sen!2sdz!4v1686440579646!5m2!1sen!2sdz" 
        width="1000" height="480" style="border:0;"  
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
    <script src="js/script.js"></script>



</body>
</html>