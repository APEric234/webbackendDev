<?php
require_once('db.php');

    $db=get_db();
    $id=$_POST['gameId'];
    echo $id;    
    $query = "select game_id from table_top where game_id = $id;";
    $stmnt = $db->query($query);
    $stmnt -> execute();
    $id_duplicate = $stmnt->fetchAll(); 
    if(!empty($id_duplicate)){
      //note to self this will infinite loop once all 1000 are made need to fix later
      $id=rand();
      
      $query = "delete from table_top where game_id = $id;";


      $stmnt = $db->query($query);
      $stmnt -> execute();
      $count = $stmnt->rowCount();
      echo $count, " delete from table ";
    }
    $query = "select game_id from cards where game_id = $id;";
    $stmnt = $db->query($query);
    $stmnt -> execute();
    $id_duplicate = $stmnt->fetchAll(); 
    if(!empty($id_duplicate)){
      //note to self this will infinite loop once all 1000 are made need to fix later
      $id=rand();
      $query = "delete from cards where game_id = $id;";
      $stmnt = $db->query($query);
      $stmnt -> execute();
      $count = $stmnt->rowCount();
      echo $count, " deleted from cards";
    }
    $query = "select game_id from pen_paper where game_id = $id;";
    $stmnt = $db->query($query);
    $stmnt -> execute();
    $id_duplicate = $stmnt->fetchAll(); 
    if(!empty($id_duplicate)){
      //note to self this will infinite loop once all 1000 are made need to fix later
      $id=rand();
      
      $query = "delete from pen_paper where game_id = $id;";


      $stmnt = $db->query($query);
      $stmnt -> execute();
      $count = $stmnt->rowCount();
      echo $count, " deleted from pen";
    }

      $query2 = "delete from games where game_id = $id;";
      $stmnt = $db->query($query2);
      $stmnt -> execute();
      $count = $stmnt->rowCount();
      echo $count, " delted from database";
   
      echo "
        <html><body>
        <b> The game in question has been removed!<b>
  
        </body></html>
      ";
    
  
?> 