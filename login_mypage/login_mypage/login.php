<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>
<!DOCTIPE HTML>
    <html lang="ja">

    <head>
        <title>ログイン</title>
        <link rel="stylesheet" type="text/css" href=login.css?= v2>
    </head>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>

    <body>
        <form action="mypage.php" method="post">
            <div class="confirm">
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" value="<?php if(isset($_COOKIE['login_keep'])){ echo $_COOKIE['mail'];} ?>" name="mail">
                </div>
                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" size="40" value="<?php if(isset($_COOKIE['login_keep'])){ echo $_COOKIE['password'];} ?>" name="password">
                </div>
                <div class="login_check">
                    <label><input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep" <?php
                          if(isset($_COOKIE['login_keep'])){
                              echo "checked='checked'";
                          }
                          ?>>ログイン情報を保存する</label>
                </div>
                <div class="login_button">
                    <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
        <footer>
            © 2018 InterNous.All rights reserved
        </footer>
    </body>

    </html>
