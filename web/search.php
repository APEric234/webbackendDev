<?php 
require_once('db.php');
$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);

  $query_string = "select * from games;" ;

  
  foreach ($db->query($query_string) as $row) {
    if($row['game_name'] == $game){
      echo("<li class='game'>The game <b>"+$row['game_name']+"</b> It has the genre of"+ $row['genre'] +" and is in stock</li></br></br>");
    }

}
  

}catch(Exception $ex){
  echo("there was an error");
  echo($ex);
}
?>
 