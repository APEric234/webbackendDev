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
  <P>Here we hope to fulfill all your gaming needs!</P>
  <p> Your search returned the following games</P>
  <ul>
  <?php require_once('db.php'); ?>

  </ul>

</body>
<footer><?php echo date("D M d, Y G:i a");?></footer>

</html>