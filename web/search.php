<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);
  $sql = 'SELECT * from games;';
  $result =$db->query($sql);
  $result -> execute();
  if($result->num_rows>=1){
  foreach ($result as $row) {
      print "got here";
      print $row["game_name"]
  }
}

}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 