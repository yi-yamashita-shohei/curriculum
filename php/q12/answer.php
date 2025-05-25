<!-- 課題⑫：現在の日付と時刻を出力しよう -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
date_default_timezone_set('Asia/Tokyo');
$now = date("Y年m月d日 H:i:s");
echo "現在の日時：$now";
?>
</body>
</html>
