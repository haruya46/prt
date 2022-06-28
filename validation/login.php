<?php
require_once('../public/login.php');

$err = [];
//バリデーション
if(!$user=filter_input(INPUT_POST,'user')){
    $err[]='メールアドレスを記入をしてください';
}
if(!$user=filter_input(INPUT_POST,'password')){
    $err[]='パスワードを記入をしてください';
}
$password=filter_input(INPUT_POST,'password');
//正規表記
if(!preg_match("/\A[a-z\d]{8,100}+\z/i",$password)){
    $err[]='パスワードは英数字８文字以上１００文字以下にしてください';
}
$password_conf=filter_input(INPUT_POST,'passwprd_conf');

if(count($err)===0){

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($err)>0):?>
    <?php foreach($err as $e) : ?>
        <p><?php echo $e ?></p>
    <?php endforeach  ?>
    <?php else : ?>
    <p>ユーザー登録が完了しました</p>
    <?php endif ?>
    <a href="../public/login.php">戻る</a>
</body>
</html>