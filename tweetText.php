<?php
require_once('dbc.php');
function texts($userData)
{
    connect();
    $stmt=connect()->prepare("SELECT * FROM `tweet`;
    WHERE 'id' =:id;
    ");


    $stmt->bindParam(":id",$_GET["id"],PDO::PARAM_INT);
    $stmt->execute();
    $texts=$stmt->fetchAll();

    foreach($texts as $tweettext){
        echo $tweettext['id'];
        echo $tweettext['format'];
        echo $tweettext['time'];
        echo $tweettext['tweet'];
    }

}
  

  
?>