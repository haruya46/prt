<?php 
require_once('dbc.php');
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css?<?php echo date("Ymd:h-is"); ?>" rel="stylesheet" >
    <title>GameSns</title>
</head>
<body>

<header class="header-main">
    <h1>GameSns</h1>
    <div class="header-main-dm">
        
    </div>
</header>
<main>
    <div class="side-left">
        <p>home</p>
        <a href="login.php"><img class="icon" src="image/aicon.jpg" alt="アイコン"></a>
        <p>DM</p>
        <p>大会を<br>探す</p>
    </div>
    <div class="main-home">
        <div class="main-post">
            <p>投稿</p>
            <form action="index.php" method="POST">
                <input type="text" name="gamename">
                <select name="format">
                    <option value="1">形式未選択</option>
                    <option value="2">シングル</option>
                    <option value="3">デュオ</option>
                    <option value="4">スクワット</option>
                    <option value="5">クインテット</option>
                </select>
                <input type="datetime-local" name="time" value="time">
                <br>
                <textarea name="tweet"value="test"maxlength="150"></textarea>
                <a href="memo.php"></a><input type="submit" value="送信"></a>

            </form>
            <?php require_once('formtest.php'); ?>
        
        </div>
        <div class=timeline>
            <p>タイムライン</p>
            <div class= search-timeline>
                <img class=icon src="image/aicon.jpg" alt="aicon">
                <p >ゲーム名<span>

                </span></p>
                <p>荒野行動</p>  
            </div>
            <div class=search-timeline>
                <p>日付</p>
                <p>xxxx年xx月xx日</p>   
            </div>
            <p maxlength="150">ここにテキストここにテキストここにテキストここにテキスト</p>
        </div>
        
    </div>
    
</main>
</body>
</html>