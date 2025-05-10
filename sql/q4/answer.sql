--課題④：書籍と著者の情報を結合して表示
SELECT books.id,books.title,books.price,books.genre_id,books.author_id,authors.name as author_name 
FROM books
JOIN authors ON books.author_id = authors.id
