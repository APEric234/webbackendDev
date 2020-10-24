<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);

  $query_string = "select * from games;" ;
  echo($query_string);

  
  foreach ($db->query($query_string) as $row) {
    echo $row['game_name']; 
    if($row['game_name'] == $game){
      echo "<li class='game'>The game <b>",$row['game_name'],"</b> It has the genre of", $row['genre'] ," and is in stock</li></br></br>";
    }

}
  

}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 