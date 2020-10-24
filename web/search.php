<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);
  $sql = 'SELECT * from games;';
  $result =$db->query($sql);
  $result -> execute();
  $result = $result ->fetch(PDO::FETCH_ASSOC);
  print_r($result);
  if($result->num_rows>=1){
  foreach ($result as $row) {
      print "got here";
      print $row["name_game"]
  }
}

}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 