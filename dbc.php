<?php 
    $dsn = "mysql:dbname=gamesns;host=localhost;charset=utf8";
    $user ="root";
    $password ="";
    $opt = [];

    $pdo=new PDO($dsn,$user,$password,$opt);
?> 
<?php
$pdo=new PDO($dsn,$user,$password,$opt);

$stmt = $pdo->prepare("SELECT * FROM tweet;");
$stmt->execute();
$users=$stmt->fetchAll();

foreach($users as $user){
    echo $user['id'];
    echo $user['form'];
}
?>