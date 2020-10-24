<?php 

$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);
  $sql = 'SELECT * from games;';
  $result =$db->query($sql);
  if($result->num_rows>=1){
  foreach ($result as $row) {
      print "got here";
  }
}

}catch(Exception $ex){

  echo 'Caught exception: ',  $ex->getMessage(), "\n" ;
}
?>
 