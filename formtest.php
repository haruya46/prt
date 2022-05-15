<?php 
require_once('index.php');
//エラーメッセージ
    $err= [];
    
    //バリデーション
    if(!$gamename=filter_input(INPUT_POST,'gamename')){
        $err[]='ゲーム名を記入してください';
    }
    if(!$format=filter_input(INPUT_POST,'format')>1){
        $err[]='形式を選択してください';
    }
    if(!$time=filter_input(INPUT_POST,'time')){
        $err[]='日時を指定してください';
    }
    if(!$tweet=filter_input(INPUT_POST,'tweet')){
        $err[]='本文を記入してください';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿完了画面</title>
</head>
<body>
    <?php if(count($err) > 0) : ?>
        <?php foreach($err as $e): ?>
            <p><?php echo $e; ?></p>
        <?php endforeach ?>
    <?php else : ?>
        <p>投稿が完了しました</p>
<?php endif ?>
</body>
</html>