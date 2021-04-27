<?php
mb_internal_encoding("utf8");
session_start();


?>

<!DOCTIPE HTML>
    <html lang="ja">

    <head>
        <title>マイページ</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
        <div class="login"><a href="login.php">ログアウト</a></div>
    </head>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>

    <body>
        <div class="confirm">
            <h2>会員情報</h2>
            <div class="hello">
                <?php echo "こんにちわ！　".$_SESSION['name']."さん"; ?>
            </div>
            <div class="profile_pic">
                <img src="<?php echo $_SESSION['picture']; ?>">
            </div>
            <form action="mypage_update.php" method="post">
            <div class="basic_info">
                <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
                <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
                <p>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
            </div>
            <div class="comments">
                <input type="text" size="30" value="<?php echo $_SESSION['comments']; ?>"name="comments">
            </div>
                <div class="submit">
                        <input type="submit" class="submit_button" size="35" value="この内容に変更する">
                    </div>
                </form>
        </div>
        <footer>
            © 2018 InterNous.All rights reserved
        </footer>
    </body>

    </html>
