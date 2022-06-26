<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css?<?php echo date("Ymd:h-is"); ?>" rel="stylesheet" >
    <title>ログイン</title>
</head>
<body>
    <form class="login-form" action="" method="POST">
        <input class="login-id" type="email" name="ID">
        <input class="login-pass" type="password" name="password">
        <input class="login-keep" type="submit" name="keep">
        
    </form>
</body>
</html>