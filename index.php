<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css?<?php echo date("Ymd:h-is"); ?>" rel="stylesheet" >
    <title>URL順位チェッカー</title>
</head>
<body>
<header>
    <div class="header-top">
        <p>順位チェッカー</p>

    </div>
    <div class="header-right">
        <div class="header-sab">
            <ul>
                <li>web版</li>
                <li>youtube</li>
                <li>お問い合わせ</li>
            </ul>
        </div>
        <div calss="header-icon">
            <img src="image/aicon.jpg" alt="画像">
        </div> 
    </div>
</header>
<main>
    <div class="Input-field">
        <p>URL</p>
        <form action="date.php" name="url" method="post">
            <input type="url" name="url">
            <p>キーワード</p>
            <input type="text" name="keyword">
            <div>
                <input type="button" value="＋">
            </div>
            <div>
                <input type="submit" value="実行する">
            </div>
        </form>
    </div>
    <div class="Output field">
        <p>結果</p>
        <div>
           <output name="Output field">1</output>
           <output name="title">テキスト</output>
           <output name="auturl"> <a>https://youtube.com</a></output>
            <br>
        </div>


    </div>
</main>

</body>
</html>