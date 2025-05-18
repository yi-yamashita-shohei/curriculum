<!-- 課題⑧：年齢に応じてメッセージを切り替えよう -->
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="answer.php" method="post">
        <label for="age">年齢を入力してください：</label>
        <input type="number" name="age" id="age" required>
        <input type="submit" value="送信">
<?php
        if (isset($_POST['age'])) {
            $age = $_POST['age'];

            if ($age < 0) {
                echo "年齢は0以上の整数で入力してください。";
            } elseif ($age < 20) {
                echo "あなたは未成年です。";
            } elseif ($age < 65) {
                echo "あなたは成人です。";
            } else {
                echo "あなたは高齢者です。";
            }
        }
?>
 </body>
 </html>
