-- 課題③：ジャンルごとの冊数をカウント
SELECT genre_id,COUNT(*) FROM books GROUP BY genre_id;
