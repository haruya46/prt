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
    <div class="header-top">
        
        <a href="login.php"><img class="icon" src="image/aicon.jpg" alt="アイコン"></a>
    </div>
    
    
</header>
<main>
    <div class="side-left">
        <p>home</p>
        <p>profile</p>
        <p>DM</p>
    </div>
    <div class="main-home">
        <div class="main-post">
            <form action="index.php" method="POST">
                <input type="search" name="search">
                <select name="format">
                    <option value="none">形式未選択</option>
                    <option value="single">シングル</option>
                    <option value="duo">デュオ</option>
                    <option value="squat">スクワット</option>
                    <option value="quintet">クインテット</option>
                </select>
                <input type="datetime-local" name="time" value="time">
                <br>
                <textarea name="tweet"value="test"maxlength="150"></textarea>
                <input type="submit" value="送信">
            </form>
        
        </div>
        <div class="timefrom">
            <?php $search =$_POST['search'];?>
            <p><?php echo $search; ?></p>

            <?php $format=$_POST['format'];?>
            <p><?php echo $format; ?></p>

            <?php $time=$_POST['time'];?>
            <p><?php echo $time; ?></p>

            <?php $tweet=$_POST['tweet'];?>
            <p><?php echo $tweet; ?></p>
        </div>


    </div>
    
</main>
</body>
</html>