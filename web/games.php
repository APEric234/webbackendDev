<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" href="game_searched.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="homePage.JS"></script>
</head>
<title>
  Games Forum

</title>
<h1>Welcome to Games For US!</h1>
  <div class="topnav">
  <a class="active" href="games.php">Home</a>
  <a href="addition.php">add a game</a>
  <a href="deletion.php">remove a game</a>
</div>
<P>Here we hope to fulfill all your gaming needs!</P>
<form action="game_searched.php" method="post">
  What game are you looking for (to get all games set it to all): <input type="text" name="game" value="All" required><br>
  <p>Hit submit to check if we have it in stock</p>
  <input type="submit">

  </body>
  <footer><?php echo date("D M d, Y G:i a");?></footer>

</html>