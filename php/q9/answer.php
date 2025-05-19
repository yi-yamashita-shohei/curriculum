<!-- 課題⑨：フォームから名前を受け取ってあいさつしよう -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>お名前を入力してください</p>
    <form action="answer.php" method="post">
        <input type="text" name="name">
        <input type="submit" value="送信">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
        echo "こんにちは、" . $name . "さん";
    } 
    ?>
</body>
</html>
