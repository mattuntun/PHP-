<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クラスの概念を知る</title>
</head>
<body>




<?php
 class Zaku {
   public $zaku_name;
   public $item;
   public $pilot;
   function __construct($a,$b,$c) {
    $this->zaku_name = $a;
    $this->item = $b;
    $this->pilot =$c;
  }
    public function army() {
      $zeon ="この機体の名前は" . $this -> zaku_name. "である</br>
              材料は" . $this -> item ."である</br>
              パイロットは" . $this -> pilot. "でなければならない</br>
              この機体は3倍速い";
      return $zeon;
     }
  }


$only_Shah = new Zaku ('赤ザク','鉄','シャー');
echo $only_Shah -> army();




print '</br>';
print '</br>';






 class Zaku_2 {
   public $zaku_name;
   public $item;
   public $pilot;
   function __construct($a,$b,$c) {
    $this->zaku_name = $a;
    $this->item = $b;
    $this->pilot =$c;
  }
    public function army() {
      $zeon ="この機体の名前は" . $this -> zaku_name. "である</br>
              材料は" . $this -> item ."である</br>
              パイロットは" . $this -> pilot. "でなければならない</br>
              この機体は3倍速い";
      return $zeon;
     }
  }

$Shah = new Zaku_2 ('ニューザク','鉄鋼','アズナブル');
echo $Shah -> army();

?>

<br>
<br>

<?php

class ZakuZaku extends Zaku{
  public function army() {
    $zeon ="この機体の名前は" . $this -> zaku_name. "である</br>
            材料は" . $this -> item ."である</br>
            パイロットは" . $this -> pilot. "でなければならない</br>
            この機体は3倍遅い";
    return $zeon;
   }
}

$Shah = new ZakuZaku ('偽ザク','アルミホイル','モブ');
echo $Shah -> army();





?>






<br>
<br>
<br>

<?php

class Gundam {
  public $パイロット;
  public $連合軍;
  public $材料;

    function __construct($aa,$bb,$cc) {
       $this -> パイロット = $aa;
       $this -> 連合軍 = $bb;
       $this -> 材料 = $cc;
    }
    function army2() {
      $white_base ="この機体パイロットの名前は" . $this -> パイロット. "である</br>
                    製造元は" . $this -> 連合軍 ."である</br>
                    材料は" . $this -> 材料. "である</br>";
      return $white_base;
                   
    }
    
}

$amuro = new Gundam ('アムロレイ','リーゼント','鉄');
echo $amuro -> army2();
?>


<br>
<br>


<?php

class Z_gundam extends Gundam{

}
$amuro = new Z_gundam ('名前忘れた','連合軍','鉄鋼');
echo $amuro -> army2();

function kakezan($a = 3,$b = 3){
  print $a*$b;
}

echo kakezan(3,4) ."</br>";

$pantu =array('aaa','dddd','ssss');

$pantu =['asdf','dfhgs','gjkc'];
print_r($pantu)."</br>";

print $pantu[2]."</br>";

print "</br>";
print "</br>";
print "</br>";


foreach ($pantu as $aaa) {
  echo $aaa."</br>";
}

print "</br>";
print "</br>";
print "</br>";




$sum = 0;
for($i=1; $i <= 10; $i = $i+1){
   $sum = $sum + $i;
   }
   print $sum;

  
?>


<?php

$fruite = array("apple","lemon","banana");
sort($fruite);

print_r ($fruite);

?>
  
<?php

function get_price($price) {
  $price *=1.08;
  return $price;
}

echo get_price(300)."</br></br></br></br>";

function de_demo($name="aaaa") {
  echo "私の名前は".$name."です";
}

echo de_demo("baka")."</br></br></br></br>";
echo de_demo()."</br></br></br></br>";


function vending_machin($kingaku,$juce) {
  if ($kingaku >= 120) {
    $oturi = $kingaku - "120";
    
    return "購入いただきありがとうございます</br>
          お買い上げいただいた商品は</br>"
          .$juce."です</br>
          おつりは</br>"
          .$oturi."円です";
          
  } else {
    $husoku = 120 - $kingaku;
    
    return "お金が足りません</br>"
          .$husoku."円不足しています";
  } 
}
  echo vending_machin("89","コーラ");
    





?>


</body>
</html>