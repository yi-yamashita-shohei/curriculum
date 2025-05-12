-- 課題⑨：JOINとWITH句を用いた著者一覧の抽出
WITH author_name AS (
    SELECT books.genre_id
    FROM books
    WHERE genre_id = 1
)
SELECT DISTINCT authors.name AS author_name
FROM authors 
JOIN books ON authors.id = books.author_id
JOIN genres ON books.genre_id = genres.id;
