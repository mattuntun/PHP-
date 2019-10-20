<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クラスの概念を知る</title>
</head>
<body>

オブジェクト指向とは<br>
データの処理と構造を別にまとめたもの<br>
<br>
対義語に構造化プログラミング<br>
構造化プログラミングとは、構造のみ、表示する部分から外に出したもの<br>

<br>
以下にガンダムで例える<br>
<br>
オブジェクトとは、「クラス」を作成し、「インスタンス」を実行すること。<br>
言い換えると<br>
オブジェクトとは、「ガンダム工場」を作成し、「ガンダムを実体化させる」ことである。<br>
<br>

<p>
class Zaku { <br>
  public $機体名;<br>
  public $材料<br>
  public $パイロット<br>
  function __construct($a,$b,$c){<br>
     $this->zaku_name = $a;<br>
     $this->item = $b;<br>
     $this->pilot =$c;<br>
   }<br>
   pubric function 説明() {<br>
     $司令官 ="この機体の名前は".$this -> $機体名."である<br>
               材料は".$this -> $材料."である<br>
               条件としてパイロットは「".$パイロット"」でなければならない";<br>
     return $司令官;<br>
  }<br>

}<br>
</p>
<br>
zaku工場を設置し、機体名と材料、パイロットを用意<br>
用意した材料を適した場所に置くために、__constructという機械を設置<br>
関数「説明」を作り、関数の中に司令官を登場させて、司令官が説明させる内容を定義した<br>
最後に、司令官をreturnsすることで説明の内容を返す<br>

<br>
<br>
zakuの製造方法(画面への表示)は以下で行う<br>
<br>
$シャー専用=new Zaku（"赤ザク"、"鉄"、"シャー"）;<br>
echo $シャー専用 -> $説明;

<br>
<br>
シャー専用という変数を作成し、zakuの工場には「赤ザク」「鉄」「シャー」と名前、材料、パイロットを用意。<br>
シャー専用の変数の中の、「説明」という関数をechoで呼び出す<br>
となる<br>

実際にやってみる<br>
<br>
<br>


<?php
 class Zaku {
   public $zaku_name;
   public $item;
   public $pilot;
   function __construct($a,$b,$c){
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

?>


  
</body>
</html>