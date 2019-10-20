<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<!--classを作成-->
<?php
$player_hand = $_POST['shoubu'];


$pc_hand = array('グー' => 'グー','チョキ' => 'チョキ','パー' => 'パー');
$rand_pc_hand = array_rand($pc_hand, 1);


class Battle{
  public $player_hand;
  public $rand_pc_hand;

    function __construct($a, $b) {
        $this ->player_hand = $a;
        $this ->rand_pc_hand = $b;

    }
    public function janken() {
      switch ($this ->player_hand) {
          case ($this ->player_hand === $this ->rand_pc_hand);
            echo $result = "あいこです！";
            break;

            case 'グー':
            $result = ($this ->rand_pc_hand === 'チョキ') ? '勝ち！' : '負け！';
            echo $result;
            break;

            case 'チョキ':
            $result = ($this ->rand_pc_hand === 'パー') ? '勝ち！' : '負け！';
            echo $result;
            break;

            case 'パー':
            $result = ($this ->rand_pc_hand === 'グー') ? '勝ち！' : '負け！';
            echo $result;
            break;
            }
      }
}


$jajanken = new Battle($player_hand,$rand_pc_hand);

?>

<?php
class Shoubute{
  public $player_hand;
  public $rand_pc_hand;

   function __construct($a,$b){
     $this ->player_hand = $a;
     $this ->rand_pc_hand = $b;
   }

   public function shoububu(){
     $sengen ="<h2>勝負！！</h2> </br> 
              あなたは" .$this ->player_hand ."を出しました</br>
              </br>
              PCは".$this ->rand_pc_hand."を出しました</br>
              </br>
              <h2>結果は・・・</h2> </br>";
   }
}

$shoubushoubu = new Shoubute($player_hand,$rand_pc_hand);

?>


<!--classを作成終了-->


<h2>PCとのじゃんけん勝負の結果！</h2>

<?php

echo $shoubushoubu ->shoububu();
echo $jajanken ->janken();

?>


</body>
</html>