<?php
require_once('db.php')
?>

<?php
    $db=get_db();
    $id=rand(2,1000);
    
    $query = "select game_id from games where game_id = $id;";


    $stmnt = $db->query($query);
    $stmnt -> execute();
    $id_duplicate = $stmnt->fetchAll(); 
    while(!empty($id_duplicate)){
      //note to self this will infinite loop once all 1000 are made need to fix later
      $id=rand();
      
      $query = "select game_id from games where game_id = $id;";


      $stmnt = $db->query($query);
      $stmnt -> execute();
      $id_duplicate = $stmnt->fetchAll(); 
    }

      $name=$_POST['name'];
      
      $type=$_POST['type'];
      $genre=$_POST['genre'];

      $query2 = "insert  into games (game_id,genre,type_gamee) Values($id,'$name','$genre');";
      if ($type== "TableTop"){
        $query3 = "insert  into tabke_top (game_id) Values($id);";
      }elseif($type== "Cards"){
        $query3 = "insert  into cards (game_id,num_cards) Values($id,52);";
      }else{
        $query3 = "insert  into cards (game_id,version) Values($id,'1.0');";
      }
      $stmnt = $db->prepare($query2);
      $stmnt->execute();
      $stmnt = $db->prepare($query3);
      $stmnt->execute();
      echo "
        <html><body>
        <b> Your game  $name has been added to the list of available games succesfully!<b>
  
        </body></html>
      ";
    
  
?> 