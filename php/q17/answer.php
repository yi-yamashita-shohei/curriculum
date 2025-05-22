<!-- 課題⑰：配列を検索して一致する要素を表示しよう -->
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h2>書籍検索フォーム</h2>
    <form method="post" action="">
        <input type="text" name="keyword" placeholder="キーワードを入力">
        <input type="submit" value="検索">
    </form>

    <?php
    $books = [
        'PHP入門',
        'Java基礎',
        '実践PHP',
        'JavaScript初級',
        'HTML & CSS',
        'LaravelでWeb開発'
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $keyword = $_POST['keyword'];

        echo "<h3>検索キーワード：{$keyword}</h3>";

        $found = [];

        foreach ($books as $book) {
            if (strpos($book, $keyword) !== false) {
                $found[] = $book;
            }
        }

        if (count($found) > 0) {
            echo "<p>→ 見つかった書籍：</p><ul>";
            foreach ($found as $title) {
                echo "<li>- {$title}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>見つかりませんでした。</p>";
        }
    }
    ?>
 </body>
 </html>
