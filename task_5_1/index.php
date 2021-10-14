<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>task_5_1</title>
    </head>
    <body>
<?php
    $price = array('apple' => 150, 'orange' => 120, 'pinapple' => 300);
    echo'<table border = "1">';
    foreach($price as $a => $b){
        echo"<tr><td>$a</td><td>$b</td></tr>\n";
    }
    echo'</table>';
?>
    
    </body>
</html>