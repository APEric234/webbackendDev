<!DOCTYPE html>

<html>
<header>

</header>


<head>

  <link rel="stylesheet" href="game_searched.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="homePage.JS"></script>
</head>
<title>
  Game Searched

</title>

<body>

  <h1>Welcome to Games For US!</h1>

  <div class="topnav">
    <a href="games.php">Home</a>
    <a href="addition.php">add a game</a>
    <a href="deletion.php">remove a game</a>
  </div>
  <P>Here we hope to fulfill all your gaming needs!</P>
  <p> Your search returned the following games
    <ul class="search_results">
      <?php
    require_once('db.php');
    require_once('search.php'); 
    ?>


    </ul>
  </P>


</body>
<footer><?php echo date("D M d, Y G:i a");?></footer>

</html>