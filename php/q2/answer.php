<?php
//課題②：偶数か奇数かを判定しよう
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="answer.php" method="post">
    <label for="int">数字を入力してくだい</label>
    <input type="number" name="number" id="int">
 <button type="submit">判定する</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['number'];

    if (is_numeric($number)) {
      if ($number % 2 === 0) {
        echo "<p>$number は偶数です。</p>";
      } else {
        echo "<p>$number は奇数です。</p>";
      }
    } else {
      echo "<p>数字を入力してください。</p>";
    }
  }
 ?>
</body>
</html>
