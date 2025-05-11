/*
課題⑥：ページネーション（LIMITとOFFSET）
*/
SELECT id,title,price FROM books
ORDER BY id
LIMIT 10 OFFSET 20 
