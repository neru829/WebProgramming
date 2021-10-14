<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>task_6_2</title>
    </head>
    <body>
        <h1>掲示板</h1>
        <h2>確認画面</h2>
        <form method="post" action="post.php">
<?php
    $title = $_POST['title'];
    $text = $_POST['text'];

    echo"<h3>タイトル</h3>　<pre>" .htmlspecialchars($title). "<pre><br>\n";
    echo"<h3>本文</h3><br><pre>" .htmlspecialchars($text). "<pre><br>\n";
?>
            <input type="hidden" name="title" placeholder="タイトル" value="<?php echo $title; ?>">
            <textarea style="display:none" name="text" rows="15" cols="80" maxlength="1200" placeholder="本文"><?php echo $text; ?></textarea>    
            <button type="submit">修正</button>
        </form>
        <form action="index.php">
            <button>投稿</button>
        </form>
    </body>
</html>
