<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題016</title>
</head>
<body>
  <p>
    <?php
    //クラスを定義する
    class Food {
      private $name;
      private $price;

    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }
    public function show_price() {
      echo $this->price . "<br>";
    }
    }
  
    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function show_height() {
        echo $this->height . "<br>";
      }
    }

      $potato = new Food("potato", 250);
      print_r($potato);
      echo '<br>';
      $dog = new Animal("dog", 60, 5000);
      print_r($dog);
      echo '<br>';
      $potato->show_price();
      $dog->show_height();

    ?>
  </p>
</body>
</html>