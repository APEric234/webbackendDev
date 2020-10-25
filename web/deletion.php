<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" href="homepagestly.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="homePage.JS"></script>
</head>
<title>
  Games Forum

</title>
<h1>Welcome to Games For US!</h1>
<div class="topnav">
  <a href="games.php">Home</a>
  <a href="addition.php">add a game</a>
  <a class="active" href="deletion.php">remove a game</a>
</div>
<div>
  <P>Here we hope to fulfill all your gaming needs!</P>


  <?php 
  require_once("db.php");
  require_once("generate_deletables.php");
  ?>
    </body>
    <footer><?php echo date("D M d, Y G:i a");?></footer>

</html>