<!DOCTYPE html>

<html>
<header>

</header>


<head>

  <link rel="stylesheet" href="homepagestly.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="homePage.JS"></script>
</head>
<title>
  Games Forum

</title>

<body>

  <h1>Welcome to Games For US!</h1>
  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="genre.php">Genres</a>
    <a href="wholecatalog.php">Contact</a>
    <a href="about.html">About</a>
  </div>
  <P>Here we hope to fulfill all your gaming needs!</P>
  <p> Your search returned the following games
    <ul class="search_results">


    </ul>
  </P>


</body>
<footer><?php echo date("D M d, Y G:i a");?></footer>
<?php require_once('search.php'); ?>
</html>