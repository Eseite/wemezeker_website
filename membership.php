<?php include('connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wemezeker|Members login</title>
    <link rel="stylesheet" href="member.css">
    <!--<link rel="stylesheet" href="bootstrap-4.4.1/dist/css/bootstrap.min.css">
    <script src="JQuery.js"></script>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>-->
</head>
<body >
<header id="navbar">
        <img id="logo" src="logof.jpg" alt="Logo" width="100px" height="70px">
        <h1>Wemezeker</h1>
        <nav id="navbar">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html #events">Events</a></li>
            <li><a href="#">Members Log-in</a></li>
            <li><a href="registration.php">Registration</a></li>
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
        <div class="box">
            <h1 style="text-align: center; font-size: 35px; color:  rgb(182, 114, 35);">Wemezeker Library  </h1> <br>
            <h1 style="text-align: center; font-size: 35px; color:  rgb(182, 114, 35);"> Users Login Page </h1><br>
        <form name="login" action="membership.php" method="POST">
            <div class="login">
                <input class="form-control" type="text" name="username" placeholder="username" required><br><br>
                <input class="form-control" type="password" name="password" placeholder="password" required><br><br>
               <center> <input id="btn" type="submit" name="submit_login" value="Login" style="background-color:rgb(182, 114, 35); "></center>
            </div>
        </form>
        <p style="color:white; padding-left: 15px;">
            <br><br>
            <a  style="color: white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
            Not yet a member? <a style="color: white;" href="registration.php">Sign up</a>
        </p>
        </div>
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