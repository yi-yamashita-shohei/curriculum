<!-- 課題⑬：テキストファイルに書き出して保存しよう -->
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
<?php
$fp = fopen("output.txt", "w");  
fwrite($fp, "Hello, this is a test message!");
fclose($fp);
?>

 </body>
 </html>
