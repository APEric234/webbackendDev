<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  $sql = 'SELECT * from games;';
  $result =$db->query($sql);
  $result -> execute();
  $result = $result ->fetchAll(PDO::FETCH_ASSOC);
  $count_added = 0;
  foreach ($result as $row) {
    if ($row["name_game"] == $game || $game == "All" ){
      echo "<li class=game> We have a copy of <b>" ,$row["name_game"],"</b> we have it categorized as a ",
      $row["type_game"]," type game of the ",$row["genre"]," genre </li>";
      $count_added=$count_added+1;

  
    }
  }
  if($count_added==0){
    echo "<li class=game> We dont have a copy of this game</li>"
  }

}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 