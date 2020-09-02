<?php

 include ('connection1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wemezeker|Members registration</title>
    <link rel="stylesheet" href="member.css">
    <!--<link rel="stylesheet" href="bootstrap-4.4.1/dist/css/bootstrap.min.css">
    <script src="JQuery.js"></script>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>-->
    <script src="validate.js"></script>
</head>
<body>
<header id="navbar">
        <img id="logo" src="logo.jpg" alt="Logo" width="100px" height="70px">
        <h1>Wemezeker</h1>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html #events">Events</a></li>
            <li><a href="membership.php">Members Log-in</a></li>
            <li><a href="#">Registration</a></li>
            <li><a href="about.html">About</a></li>
            <div id="icon">
            <ul>
              <li><a href="https://www.facebook.com/pages/National-Archives-and-Library-of-Ethiopia/144910335523346"><img src="icons8_facebook_circled_32.png" alt="logo" title="Faebook Page"></a></li>
              <li><a href="https://twitter.com/hashtag/wemezekir"><img src="icons8_twitter_circled_32.png" alt="logo" title="Twitter Page"></a></li>
              <li><a href="https://usembassyaddis.wordpress.com/"><img src="blog.png" alt="logo" width="28px" height="28px" title="Blog"></a></li>              
            </ul>
            </div>
          </ul>
        </nav>
        <script src="scroll.js"></script>
      </header>
    <section>
        <div class="boxsign">
            <h1 style="text-align: center; font-size: 35px; color:  rgb(182, 114, 35); ">Wemezeker Library </h1><br>
            <h1 style="text-align: center; font-size: 35px; color:  rgb(182, 114, 35);"> Users Registration Page </h1><br>
        <form onsubmit="return validate()" name="registration" action="registration.php" method="post">
        <?php include('error.php'); ?>

            <div class="signup">
                <input id="first" class="form-control" type="text" name="firstname"  placeholder="First name" required><br><br>
                <input id="last" class="form-control" type="text" name="lastname"  placeholder="Last name" required><br><br>
                <input id="email" class="form-control" type="email" name="email" value="<?php echo $email; ?>" placeholder="E-mail" required><br><br>
                <input id="user" class="form-control" type="text" name="username" value="<?php echo $username; ?>" placeholder="User name" required><br><br>
                <input id="id" class="form-control" type="number" name="id"  placeholder="Id" ><br><br>
                <input id="pass" class="form-control" type="password" name="password"  placeholder="password" required><br><br>
                <input id="pass1" class="form-control" type="password" name="password1" placeholder="Confirm password" required><br><br>
               <center> <input id="btn" type="submit" name="submit" value="Sign Up" style="background-color:rgb(182, 114, 35); "></center>
            </div>
        </form><br><br>
        <p style="color:white; padding-left: 100px;">
            Already a member? <a style="color: white;" href="membership.php">Login</a></p>
    </section>   

    <footer>
      <div class="footerDesgin">
       <p>Addis Ababa, Ethiopia <br>
            Tel: +251 (0) 911689759 <br>
            E-mail: addisac2014@gmail.com <br>
            </p>
        <p>&copy; Wemezker 2020</p>
      </div>
    </footer>
</body>
</html>