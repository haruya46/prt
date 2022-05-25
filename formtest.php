<?php 

require_once('index.php');
require_once('tweet.php');
//エラーメッセージ
    $err= [];
    //sqlに送信する間に内容があってるのか確認する処理
    //バリデーション
    if(!$gamename=filter_input(INPUT_POST,'gamename')){
        $err[]='ゲーム名を記入してください';
    }
    if(!$time=filter_input(INPUT_POST,'time')){
        $err[]='日時を指定してください';
    }
    if(!$tweet=filter_input(INPUT_POST,'tweet')){
        $err[]='本文を記入してください';
    }
    if (count($err)===0){
        //SQｌに登録する処理
        $hasCreated = tweet::createTweet($_POST);
        if(!$hasCreated){
            $err[]='登録に失敗しました';
        }
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