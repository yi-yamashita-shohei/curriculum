-- 課題⑦：最も書籍数の多い著者の書籍を取得（サブクエリ）
SELECT books.title, books.author_id, authors.name as author_name
FROM books
JOIN authors ON books.author_id = authors.id 
WHERE books.
author_id = (
    SELECT author_id
    FROM (
        SELECT author_id, COUNT(*) as book_count
        FROM books
        GROUP BY author_id
        ORDER BY book_count DESC
        LIMIT 1
    ) AS subquery
);
