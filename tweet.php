<?php
require_once('dbc.php');
class tweet
{
        /**
         * sqlに登録する
         *@parm array $userData
         *@return bool $result
        */
    public static function createTweet($userData)
    {
         $result=false;
         $sql='INSERT INTO tweet (gamename,format,time,tweet)
         VALUES (?,?,?,?)';

        //ユーザーデーターを配列に入れる
        $arr=[];
        $arr[]=$userData['gamename'];
        $arr[]=$userData['format'];
        $arr[]=$userData['time'];
        $arr[]=$userData['tweet'];
        try{
            $stmt=connect()->prepare($sql);
            $result=$stmt->execute($arr);

        return $result;
        }catch(Exception $e){
            return $result;
        }

    }
}

?>