<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>task_5_2</title>
    </head>
    <body>
<?php
    $a[0]['date']='2010/4/1';
    $a[0]['temperature']=20.3;
    $a[0]['pressure']=980;
    $a[0]['humidity']=60;
    
    $a[1]['date']='2010/4/2';
    $a[1]['temperature']=22.3;
    $a[1]['pressure']=970;
    $a[1]['humidity']=50;
    
    $a[2]['date']='2010/4/4';
    $a[2]['temperature']=18.3;
    $a[2]['pressure']=950;
    $a[2]['humidity']=70;

    //１次元目のキーの配列を取り出す
    $key1 = array_keys($a); 
    //２次元目のキーの配列を取り出す
    $key2 = array_keys($a[$key1[0]]); 

    echo"<table border = \"1\">\n";
    //要素名
    echo"<tr><th>\</th>";
    for($i = 0; $i < count($key2); $i++){
        echo"<th>{$key2[$i]}</th>";
    }
    echo"</tr>\n";
    //配列の中身
    foreach($a as $key => $value){
        echo"<tr><th>$key</th><td>{$value[$key2[0]]}</td><td>{$value[$key2[1]]}</td><td>{$value[$key2[2]]}</td><td>{$value[$key2[3]]}</td></tr>\n";
    }
    echo"</table>\n";
?>
    
    </body>
</html>