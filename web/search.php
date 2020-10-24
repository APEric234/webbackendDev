<?php 
require_once('db.php');
$db = get_db();

try{
  $game = $_POST["game"];
  echo($game);

  #$query = "select * from games where name_game = '"+ $game+ "';" ;
  $stmt = $db->prepare('SELECT * FROM games WHERE name_game = ?');
  $stmnt -> execute([$game]);
  $games = $stmnt->fetch();
  if($games){
    $doc = new DOMDocument();
    $ul = $doc->getElementsByTagName('ul')->item(0);
    $first = $ul->childNodes->item(0);

    $li = $doc->createElement('li');
    $li ->setAttribute('class', 'game');
    $li ->innerHtml = "The game <b>"+ $games['game_name'] + "</b> It has the genre of"+ $games['genre'] + " and is in stock";
    $ul->insertBefore($node,$li);
    echo $dom->saveHTML();
}
  

}catch(Exception $ex){
  echo($ex);
}
?>
 