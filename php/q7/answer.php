<!-- 課題⑦：ランダムでじゃんけん勝負を作ろう -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>じゃんけん勝負</h1>
    <h2>あなたの手は「
        <?php
        $janken = ['グー', 'チョキ', 'パー'];
        $rand_key = array_rand($janken, 1);
        echo $janken[$rand_key];
    ?>　」です。
</h2>
</body>
</html>
