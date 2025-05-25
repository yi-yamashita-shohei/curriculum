<!-- 課題⑪：順位付きランキングを表示しよう -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
$scores = [
    "田中" => 88,
    "佐藤" => 74,
    "鈴木" => 92,
    "山本" => 100,
    "高橋" => 67,
    "伊藤" => 85
];

arsort($scores); 
echo "<h3>テスト結果ランキング</h3>";
$rank = 1;
foreach ($scores as $name => $score) {
    echo "第{$rank}位：{$name}さん - {$score}点<br>";
    $rank++;
}
?>
</body>
</html>
