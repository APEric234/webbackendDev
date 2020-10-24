<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  $sql = 'SELECT * from games;';
  $result =$db->query($sql);
  $result -> execute();
  $result = $result ->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $row) {
    if ($row["name_game"] == $game){
      echo "<li class=game> We have a copy of <b>" ,$row["name_game"],"</b> we have it categorized as a ",
      $row["type_game"]," type game of the ",$row["genre"]," genre </li>";

  
    }
  }


}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 