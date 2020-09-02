<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
   $_SESSION['msg'] = "You must log in first";
   header('location: membership.php');
  }
  if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['username']);
   header("location: membership.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wemezeker|Members home</title>
    <link rel="stylesheet" href="link.css">
    <style>
      body{
        background-image: url(index2.jpg);
        background-position-y: 0.1px;
        

      }s
      #icon{
     display: inline;
     padding: 0.2em 13em;
  }
    </style>
</head>
<body>
    <div class="container">
    <header id="navbar">
        <img id="logo" src="logof.jpg" alt="Logo" width="100px" height="70px">
        <h1>Wemezeker</h1>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="index.html">Log out</a></li>

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
      <section id="middle">
        <center>
          <h1> Welcome To Your Page!</h1>
          <p>You can proceed with your activities here.</p><br><br><br><br><br><br><br><br>
        </center>
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
    </div>
</body>
</html>