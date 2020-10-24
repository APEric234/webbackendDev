<?php 
require_once('db.php');
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

}
  

}catch(Exception $ex){
  echo($ex);
}
?>
 