<?php 
    function dbconnect(){
        $dsn='mysql:host=localhost;dbname=memo;charset=utf8;';
        $user = 'haruya';
        $pass = '0128';
    try{
        $dbh = new PDO($dsn,$user,$pass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
            //エラー用 
        ]);
      
        //sqlに接続
        //$eにエラーを入れる
        }catch(PDOException $e){
            echo '接続失敗'.$e->getMessage();
            exit();
        }
    return $dbh;
    

}


?>