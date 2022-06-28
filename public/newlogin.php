<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/login.css ? <?php echo date("Ymd:h-is"); ?>" rel="stylesheet" >
    <title>新規登録</title>
</head>
<body>
    <div class="new-login">
        <h1>新規登録</h1>
    </div>
    <div>
        <form method="POST" action="../function/newlogin.php">
            <input name="user" type="email" class="newmail" >
            <input name="pass" type="password" class="newpass" >
            <input type="submit" value="新規登録" class="new-keep">
        </form>
    </div>
</body>
</html>
