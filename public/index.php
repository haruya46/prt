<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/style.css ? <?php echo date("Ymd:h-is"); ?>" rel="stylesheet" >
    <title>GameSns</title>
</head>
<body class="body">
    <header class="header-top">
        <div id="mask">
            <nav class="header-nav">
                <li><a href="login.php">ログイン</a></li>
                <li><a href="in.php">検索</a></li>
                <li><a href="index.php">閉じる</a></li>
            </nav>
        </div>
        <div class="header-said">
            <span></span>
            <span></span>
            <span></span>
            
        </div>
        <div class="header-title">
            <h1>memo</h1>
        </div>
        
        
    </header>
    <main>
        <form action="index.php" method="POST" class="main-form">
        <textarea name="memo" class="main-memo"></textarea>
        <input type="hidden" name="user">
        <input type="submit" value="保存する" class="main-submit">

        </form>
        <div class="main-list">
            <div class="list">
            <?php $data=$_POST; ?>
            <?php foreach($data as $a): ?>
                <p><?php echo $a; ?></p>
             
             <?php endforeach ; ?>
                
            </div>
            <div class="input">
                <input type="button" value="削除" name="削除" class="delete">
            </div>
            

        </div>


    </main>
    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
    crossorigin="anonymous"></script>
    <script src="../index.js"></script>
</body>
</html>