<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>ページタイトル</title>
    </head>
    <body>
<?php
    $a='<p>red</p>';
    $b='Can\'t';
    $c='it is $a';
    $d="it is $a";
    $e="it is \$a";
    $f='it is '.$a;
    $g=  $a.$b ;
    $h= '$a.$b';
    $i= "$a.$b";
    $j='\\';
    $k="a=\"hogehoge\"";
    $l="hogehoge='$a';";
    $m='hogehoge="$a";';//シングルクォーテーションで囲むとダブルクォーテーションを出力できる
    $n='hogehoge='.';';
    $o="\".".".\"";
    $p="hogehoge='.';";
    $q='hogehoge=\'.\';';
    $r= <<< EOT
    <p> hogehoge </p>
    $a
    <p> hogehoge </p>
EOT;
?>
    <p> $r は 「<?php echo $r ?>」です。 </p>
    </body>
</html>