<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="game_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="homePage.JS"></script>
</head>
<title>
  Games Forum

</title>
<h1>Welcome to Games For US!</h1>
<div class="topnav">
  <a  href="games.php">Home</a>
  <a class="active" href="addition.php">add a game</a>
  <a href="deletion.php">remove a game</a>
</div>
<div>
  <P>Here we hope to fulfill all your gaming needs!</P>


  <form action="success.php" method="post">
    What Type of game are you adding?

    <label><input type="radio" id="tt" name="type" value="TableTop" required> Board Game</label><br>
    <label><input type="radio" id="c" name="type" value="Cards"> Card Game</label><br>
    <label><input type="radio" id="p" name="type" value="Pen">Pen & Paper</label><br>
    
    <label for="name">Name of your game:</label>
    <input type="text" name="name" id="name" value="" required>
    <label for="genre">Genre it falls under:</label>
    <input type="text" name="genre" id="genre" value="" required>
    <label for="game_type">type it falls under:</label>
    <input type="text" name="game_type" id="game_type" value="" required>
    <p>Hit submit to add it to the catalogue</p>
    <input type="submit">
    <input type="reset">

    </body>
    <footer><?php echo date("D M d, Y G:i a");?></footer>

</html>