<?php 
//sqlにつなげるための処理
    function connect(){
        $dsn = "mysql:dbname=gamesns;host=localhost;charset=utf8";
        $user ="haruya";
        $password ="0128";
        $opt = [
            PDO::ATTR_AUTOCOMMIT=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
        ];
        
        try{
            $pdo=new PDO($dsn,$user,$password,$opt);
            return $pdo;
        }catch(PDOException $e){
            echo '接続失敗'.$e->getMessage();
            exit();
        }
    }
    
    
?> 
