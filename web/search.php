<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);
  $sql = 'SELECT * from games;';
  foreach ($conn->query($sql) as $row) {
      print $row['game_name'] . "\t";
      print $row['genre'] . "\t";
      print $row['type_game'] . "\n";
  }
  

}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 