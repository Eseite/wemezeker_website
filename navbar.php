<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="member.css">
    <style>

header {
  position: fixed;
  display: flex;
  /*max-width: 100%;
  padding: 0px 0px 20px 20px;*/
  background: rgba(6, 6, 23, 0.5);
  width: 1350px;
  color: white;
  margin: 0%;
  padding: 0%;
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
   padding: 0.2em 8em;
}
#icon ul li a {
  padding: 0.2em 0.1em;
}
    </style>
</head>
<body>
<header id="navbar" >
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
      </header>
</body>
</html>