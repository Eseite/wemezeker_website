<?php $db = mysqli_connect('localhost', 'root', '', 'library'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wemezeker|Books</title>
    <link rel="stylesheet" href="books.css">
    <!--<link rel="stylesheet" href="bootstrap-4.4.1/dist/css/bootstrap.min.css">
    <script src="JQuery.js"></script>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>-->
</head>
<body >
<header id="navbar">
        <img id="logo" src="logo.jpg" alt="Logo" width="100px" height="70px">
        <h1>Wemezeker</h1>
        <nav id="navbar">
          <ul>
            <li><a href="index2.php">Home</a></li>
            <li><a href="#">Books</a></li>
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
      <section>
<div id="box">
<center>
        <div>
        <form class="navbar-form"action="" method="post" name="form1" >
            <div>
            <input class="search"type="text" name="search" placeholder="Search books..." required>
            <button name="submit"><img src="search_16.png" alt="search"> </button>
            </div>
        </form>
        </div>
      <h1 style="color:  rgb(182, 114, 35); font-size: 40px;">List of books</h1><br>
      <?php

      if(isset($_POST['submit']))
     {
       $q=mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%' ");

        if(mysqli_num_rows($q)==0)
        {
          echo "Sorry! No book found. Try searching again.";
        }
        else
        {
      echo"<table class='table table-bordered table-hover'>";
      echo"<tr style='background-color:rgb(182, 114, 35);'>";

      echo"<th>"; echo"ID"; echo"</th>";
      echo"<th>"; echo"Book-Name"; echo"</th>";
      echo"<th>"; echo"Author name"; echo"</th>";
      echo"<th>"; echo"Edition"; echo"</th>";
      echo"<th>"; echo"Status"; echo"</th>";
      echo"<th>"; echo"Quantity"; echo"</th>";
      echo"<th>"; echo"Department"; echo"</th>";
      
      echo"</tr>";
      while($row=mysqli_fetch_assoc($q))
      {
          echo"<tr>";
          echo"<td>"; echo $row['bid']; echo"</td>";
          echo"<td>"; echo $row['name']; echo"</td>";
          echo"<td>"; echo $row['author']; echo"</td>";
          echo"<td>"; echo $row['edition']; echo"</td>";
          echo"<td>"; echo $row['status']; echo"</td>";
          echo"<td>"; echo $row['quantity']; echo"</td>";
          echo"<td>"; echo $row['department']; echo"</td>";

          echo"</tr>";
      }
      echo"</table>";
        }
      }
      else{

      $res=mysqli_query($db, "SELECT * FROM `books` ;");
     echo"<table class='table table-bordered table-hover'>";
      echo"<tr style='background-color:rgb(182, 114, 35);'>";

      echo"<th>"; echo"ID"; echo"</th>";
      echo"<th>"; echo"Book-Name"; echo"</th>";
      echo"<th>"; echo"Author name"; echo"</th>";
      echo"<th>"; echo"Edition"; echo"</th>";
      echo"<th>"; echo"Status"; echo"</th>";
      echo"<th>"; echo"Quantity"; echo"</th>";
      echo"<th>"; echo"Department"; echo"</th>";
      
      echo"</tr>";

      while($row=mysqli_fetch_assoc($res))
      {
          echo"<tr>";
          echo"<td>"; echo $row['bid']; echo"</td>";
          echo"<td>"; echo $row['name']; echo"</td>";
          echo"<td>"; echo $row['author']; echo"</td>";
          echo"<td>"; echo $row['edition']; echo"</td>";
          echo"<td>"; echo $row['status']; echo"</td>";
          echo"<td>"; echo $row['quantity']; echo"</td>";
          echo"<td>"; echo $row['department']; echo"</td>";

          echo"</tr>";
      }
      echo"</table>";
      }
     ; ?>
      </section>
      </center>
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