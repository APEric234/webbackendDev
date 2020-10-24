<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  $sql = 'SELECT * from games;';
  $result =$db->query($sql);
  $result -> execute();
  $result = $result ->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $row) {
      echo "<form submit='delete.php' method='post'>";
      echo "<input id='gameId' name='gameId' type='hidden' value=", $row["game_id"], ">";
      echo "<input type='submit' value='Delete ", $row["name_game"],"'>";
      echo "</form>";
  }


}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 