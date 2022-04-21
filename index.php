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
    <div class="header-top">
        <h1>GameSns</h1>
    <from class="header-form" action="url" method="POST">
        <label for="nickname">ゲーム名</label>
        <input type="search" name="search">
        <select name="format">
            <option value="formatnone">形式未選択</option>
            <option value="single">シングル</option>
            <option value="duo">デュオ</option>
            <option value="squat">スクワット</option>
            <option value="quintet">クインテット</option>
        </select>
        <input type="datetime-local" name="time">
        <button type="submit">🔎</button>
    </from>
    </div>
    
    
</header>
<main>
    
</main>
</body>
</html>