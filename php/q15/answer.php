<!-- 課題⑮：クラスにバリデーション処理を追加しよう -->
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function validate() {
        if (empty($this->name)) {
            return "名前を入力してください。";
        }

        if (!is_numeric($this->age) || $this->age < 0 || $this->age > 120) {
            return "年齢は0〜120の数値で入力してください。";
        }

        return true;
    }

    public function introduce() {
        $validation = $this->validate();

        if ($validation === true) {
            echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
        } else {
            echo "⚠️ 入力エラー：{$validation}<br>";
        }
    }
}

// テスト
$person1 = new Person("山田", 25);
$person1->introduce();

$person2 = new Person("", 30);  
$person2->introduce();

$person3 = new Person("田中", -5); 
$person3->introduce();
?>

 </body>
 </html>
