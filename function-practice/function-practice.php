<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>functionの練習</h1>

  <h2>送信後のページです</h2>


  


    <?php
    $from= $_POST ['from'];
    $specialty= $_POST ['specialty'];
    $favorite= $_POST['favorite'];

    print "<p>私の出身地は</p></br>";
        print "$from"."で<br/>";

        print "<p>出身地の名産品は</p></br>";
        print "$specialty"."です";

    
    function anketo ( $from="わかりません", $specialty="ありません",$favorite="ありません"){
      if ( $from =="わかりません") {
        print 'どこか指定して下さい';
        
        print'<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';

      } else {

        print "<p>私の出身地は</p></br>";
        print "$from"."で<br/>";

        print "<p>出身地の名産品は</p></br>";
        print "$specialty"."です";

        print "<p>その中で好きなものは</P>";
        print "$favorite"."です";

      }

    }

    anketo ("$from","$specialty","$favorite");

    ?>

<h2>掛け算で練習</h2>
<br>



<?php
function kakezan($a,$b=5){
  return $a*$b;
}
 
// 引数を1つ指定
echo kakezan(5) ."\n";
// 引数を2つ指
echo kakezan(10,2) ."\n";
?>

<h2>足し算で練習</h2>
<br>

<?php

$X=15;
$Y=20;

function tasizan($X,$Y){
 print $X+$Y;
}
print tasizan($X,$Y);



?>

<br>

<h2>足し算で試してみますの送信結果は以下</h2>
<br>

<?php

print 'α＋βをします';

$α=$_POST['αの値'];
$β=$_POST['βの値'];

function tashizan($α=100,$β=100) {
  return $α+$β;

}

print tashizan($α,$β);

?>

 
  
</body>
</html>




