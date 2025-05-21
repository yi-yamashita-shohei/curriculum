<!-- 課題⑭：クラスとメソッドを定義して自己紹介しよう -->
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

    public function introduce() {
        echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
    }
}
$person1 = new Person("山田", 25);
$person1->introduce();

$person2 = new Person("田中", 30);
$person2->introduce();
?>

    
 </body>
 </html>
