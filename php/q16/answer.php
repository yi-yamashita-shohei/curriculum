<!-- 課題⑯：2次元配列で書籍一覧を表示しよう -->
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
$books = [
    [
        'タイトル' => 'PHP入門',
        '価格' => 2800,
        '著者' => '田中 太郎'
    ],
    [
        'タイトル' => 'Laravel実践',
        '価格' => 3200,
        '著者' => '佐藤 花子'
    ],
    [
        'タイトル' => 'Webデザインの基礎',
        '価格' => 2500,
        '著者' => '中村 一郎'
    ]
];

echo "<h2>書籍一覧</h2>";
echo "<ul>";
foreach ($books as $book) {
    echo "<li>";
    foreach ($book as $key => $value) {
        echo "{$key}：{$value}<br>";
    }
    echo "</li>";
}
echo "</ul>";
?>
 </body>
 </html>
