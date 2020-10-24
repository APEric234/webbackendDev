<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  $sql = 'SELECT * from games;';
  $result =$db->query($sql);
  $result -> execute();
  $result = $result ->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $row) {
      echo "<li class=game> We have a copy of <b>" ,$row["name_game"],"</b> we have it categorized as a ",
      $row["type_game"]," type game of the ",$row["genre"]," genre </li>";
      echo "<form submit='delete.php' method='post'><input id='gameId' name='gameId' type='hidden' value=", $row["game_id"], ">";
      echo "<input type='submit' value='Delete'>";

  
  }


}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 