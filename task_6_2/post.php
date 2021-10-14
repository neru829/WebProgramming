<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>task_6_2</title>
    </head>
    <body>
        <h1>掲示板</h1>
        <h2>投稿画面</h2>
        <form method="post" action="confirm.php">
            <input type="text" name="title" placeholder="タイトル" value="<?php if(!empty($_POST['title'])){echo $_POST['title'];} ?>">
            <textarea name="text" rows="15" cols="80" maxlength="1200" placeholder="本文"><?php if(!empty($_POST['text'])){echo $_POST['text'];} ?></textarea>
            <button type="submit">投稿</button>
        </form>
        <form action="index.php">
            <button>取り消し</button>
        </form>
    </body>
</html>
