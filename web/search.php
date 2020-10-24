<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);
  $sql = 'SELECT * from games;';
  foreach ($conn->query($sql) as $row) {
      print "got here";
  }
  

}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 