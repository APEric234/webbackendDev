<?php
require_once('db.php')
?>

<?php
    $db=get_db();
    $id=$_POST['gameId'];
    
    $query = "select game_id from table_top where game_id = $id;";
    $stmnt = $db->query($query);
    $stmnt -> execute();
    $id_duplicate = $stmnt->fetchAll(); 
    while(!empty($id_duplicate)){
      //note to self this will infinite loop once all 1000 are made need to fix later
      $id=rand();
      
      $query = "delete game_id from table_top where game_id = $id;";


      $stmnt = $db->query($query);
      $stmnt -> execute();
    }
    $query = "select game_id from cards where game_id = $id;";
    $stmnt = $db->query($query);
    $stmnt -> execute();
    $id_duplicate = $stmnt->fetchAll(); 
    while(!empty($id_duplicate)){
      //note to self this will infinite loop once all 1000 are made need to fix later
      $id=rand();
      $query = "delete from cards where game_id = $id;";
      $stmnt = $db->query($query);
      $stmnt -> execute();
    }
    $query = "select game_id from pen_paper where game_id = $id;";
    $stmnt = $db->query($query);
    $stmnt -> execute();
    $id_duplicate = $stmnt->fetchAll(); 
    while(!empty($id_duplicate)){
      //note to self this will infinite loop once all 1000 are made need to fix later
      $id=rand();
      
      $query = "delete from pen_paper where game_id = $id;";


      $stmnt = $db->query($query);
      $stmnt -> execute();
    }

      $query2 = "delete from games where game_id =$id";
      echo "
        <html><body>
        <b> The game in question has been removed!<b>
  
        </body></html>
      ";
    
  
?> 