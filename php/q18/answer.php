<!-- 課題⑱：PDOを使ってDBに接続＆SELECTしてみよう -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
$host = 'localhost';
$dbname = 'bookshop';  
$user = 'root';         
$pass = '';         

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM books");

    echo "<h2>書籍一覧</h2>";
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>タイトル: " . htmlspecialchars($row['title']) .
             " / 価格: " . htmlspecialchars($row['price']) . "円</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
}
?>
 </body>
 </html>
