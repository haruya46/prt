<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/login.css ?<?php echo date("Ymd:h-is"); ?>" rel="stylesheet" >
    <title>ログイン</title>
</head>
<body>
    <div class="login">
        <h1>ログイン画面</h1>
    </div>
    <form class="login-form" action="../validation/login.php" method="POST">
        <input class="login-id" type="email" name="user">
        <input class="login-pass" type="password" name="password">
        <input class="login-keep" type="submit"  value="ログイン">
        
    </form>
    <div class="login-new">
        <p><a href="newlogin.php">新規登録</a></p>
    </div>
</body>
</html>