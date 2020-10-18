<!DOCTYPE html>

<html>
  <header>

  </header>
<?php
require_once('db.php')
?>
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
  <P>Here we hope to fulfill all your gaming needs!</P>
  <p> Your search returned the following games</P>
  <ul>
  <?php
$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);

  #$query = "select * from games where name_game = '"+ $game+ "';" ;
  $stmt = $db->prepare('SELECT * FROM games WHERE name_game = ?');
  $stmnt -> execute([$game]);
  $games = $stmnt->fetch();
  if($games){
  echo("<li class='game'>The game <b>"+$games['game_name']+"</b> It has the genre of"+ $games['genre'] +" and is in stock</li></br></br>");
  $count = $count+1;
}
  

}catch(Exception $ex){
  echo($ex);
}
?>
</ul>
<P>feel free to browse our other amazing games</P>
<ul>
<?php
$db = get_db();

try{
 
  $query = "select * from games;";
  $count = 0;
  echo($query);
  $stmnt = $db->query($query);
  $stmnt -> execute();
  $games = $stmnt->fetch();
  echo($games);
  foreach ($games as $gamey){
    echo("<li class='game'>The game is <b>"+$gamey['game_name']+"</b> It has the genre of"+ $gamey['genre'] +" and is in stock</li></br></br>");
    $count = $count+1;
    }


}catch(Exception $ex){
  echo($ex);
}
?>
</ul>

    </body>
    <footer><?php echo date("D M d, Y G:i a");?></footer>
 </html>