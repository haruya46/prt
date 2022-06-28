<?php
require_once('../dbc/dbc.php');
require_once('../public/newlogin.php');

//sql文を準備する
$sql="INSERT INTO `login`(`user`, `pass`) 
VALUES (:user,:pass)";
//データーベースに接続
$dbh=dbconnect();
//データを受け取る
$data=$_POST;

try{
    $stmt=$dbh->prepare($sql);
    $stmt->bindValue(':user',$data['user'],PDO::PARAM_STR);
    $stmt->bindValue(':pass',$data['pass'],PDO::PARAM_STR);
    $stmt->execute();
}catch(PDOException $e)
{
    exit($e);
}


?>