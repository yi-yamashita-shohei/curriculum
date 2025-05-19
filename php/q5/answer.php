<!-- //課題⑤：関数を作って処理をまとめよう -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
    <label for="name_input">名前：</label>
    <input type="text" id="name_input" name="name_input">
    <button type="submit">送信</button>
    </form>
    <?php
function Name($name){
 echo "こんにちは、" . $name . "さん";
}
name($_POST["name_input"]);
?>
</body>
</html>
