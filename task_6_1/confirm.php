<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>task_6_1</title>
    </head>
    <body>
        <h1>掲示板</h1>
        <h2>確認画面</h2>
<?php
    if (!empty($_POST['title'])) {
        $title = $_POST['title'];
    }
    if (!empty($_POST['text'])) {
        $text = $_POST['text'];
    }
    echo"<h3>タイトル</h3>　<pre>" .htmlspecialchars($title). "<pre><br>\n";
    echo"<h3>本文</h3><br><pre>" .htmlspecialchars($text). "<pre><br>\n";
?>
        <form action="index.php">
            <button>投稿</button>
        </form>
    </body>
</html>
