<?php $db = mysqli_connect('localhost', 'root', '', 'library'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wemezeker|Feedback</title>
    <style type="text/css">
    * {
    margin: 0%;
    padding: 0%;
  }
    body{
     background-image: url(feedback.jpg);
     background-repeat: no-repeat;
     background-position-y: 0.1px;
     background-attachment: fixed;
     background-size: 100vmax;
     color: white;
     font-family: "Times New Roman", Times, serif;      
    }
    header {
    position: fixed;
    display: flex;
    /*max-width: 100%;
    padding: 0px 0px 20px 20px;*/
    background: rgba(6, 6, 23, 0.5);
    top: 0;
    /*margin-top: -120px;*/
    width: 1350px;
    transition: top 0.5s;
  }
  #logo{
    padding-left: 20px;
    border-radius: 5px;
  }
  header h1 {
    text-shadow: black 3px 3px 5px;
    padding-top: 15px;
    font-family: "Adobe Caslon Pro", serif;
  }
  header h1:hover {
    color:  rgb(182, 114, 35);
    text-shadow: none;
  }
  header nav {
    margin-left: 40px;
    padding-top: 30px;
    padding-left: 150px;
    display: inline;
  }
  nav ul {
    list-style-type: none;
    text-align: center;
    display: inline;
  }
  nav ul li {
    display: inline;
  }
  nav ul li a {
    text-decoration: none;
    color: white;
    padding: 0.2em 0.5em;
    font-size: 20px;
    display: inline;
  }
  nav ul li a:hover {
    color:  rgb(182, 114, 35);
  }
  nav ul li a:active {
    color:  rgb(182, 114, 35);  
    text-decoration: underline;
  }
  #icon{
     display: inline;
     padding: 0.2em 13em;
  }
  #icon ul li a {
    padding: 0.2em 0.1em;
  }
    .form-control{
        height: 80px;
        width: 70%;
    }
    .wrapper{
        padding-top: 60px;
        padding-left: 100px;
        padding-right: 100px;
        color: white;
        height:300px;
        width: 700px;
        background-color: black;
        opacity: 0.8;
        margin: 165px auto;
    }
    footer {
    background: rgb(0, 0, 0);
  }
  .footerDesgin {
    font-size: 22px;
    padding: 36px 40px 40px 0%;
    text-align: center;
    color: white;
    height: 70px;
    background: rgba(53, 53, 54, 0.09);
  }
    </style>
</head>
<body>
<header id="navbar">
        <img id="logo" src="logof.jpg" alt="Logo" width="100px" height="70px">
        <h1>Wemezeker</h1>
        <nav>
          <ul>
            <li><a href="index2.php">Home</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="#">Feedback</a></li>
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
<div class="wrapper">
<center>
    <h2 style="color:  rgb(182, 114, 35);">If you have any comment and suggestion please comment below. </h2><br><br>
    <form action="" method="post">
    <input class="form-control" type="text" name="comment" placeholder="Please write something here..." ><br><br>
    <input type="submit" name="submit" value="comment" style="background-color:  rgb(182, 114, 35);">
    </form>
    </center>

    <div>
    <?php
    if(isset($_POST['submit']))
    {
        $sql="INSERT INTO `comments` VALUES('$_POST[comment]');";
        mysqli_query($db,$sql);
    }

    ?>
    </div>
    </div>
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