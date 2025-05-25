<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>書籍検索</title>
</head>
<body>
    <h2>書籍検索フォーム</h2>
    <form method="post" action="">
        キーワード：<input type="text" name="keyword">
        <input type="submit" value="検索">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $keyword = trim($_POST['keyword']);

        try {
          $dsn = 'mysql:host=localhost;dbname=bookshop;charset=utf8';
          $user = 'root'; 
          $password = ''; 


            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = "SELECT * FROM books WHERE title LIKE :keyword";
            $stmt = $pdo->prepare($sql);


            $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);

            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($results) > 0) {
                echo "<h3>検索結果：</h3><ul>";
                foreach ($results as $book) {
                    echo "<li>" . htmlspecialchars($book['title'], ENT_QUOTES, 'UTF-8') . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>該当する書籍は見つかりませんでした。</p>";
            }
        } catch (PDOException $e) {
            echo "<p>エラーが発生しました: " . htmlspecialchars($e->getMessage()) . "</p>";
        }
    }
    ?>
</body>
</html>
