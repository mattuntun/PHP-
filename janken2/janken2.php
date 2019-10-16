<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h2>勝負手を出してください</h2>

<?php
$shoubu =$_POST['shoubu'];

switch($shoubu) {
  case $shoubu == 'goo';
  print 'あなたが出したのは「グー」です';
  break;

  case $shoubu == 'choki';
  print 'あなたが出したのは「チョキ」です';
  break;

  case $shoubu == 'pa';
  print 'あなたが出したのは「パー」です';
  break;
}

?>

<br>

<h2>PCは</h2>

<?php
$pc_shoubu = array(
  'goo'=>'PCはグーを出しました',
  'pa'=>'PCはパーを出しました',
  'choki'=>'PCはチョキを出しました');

  $key = array_rand($pc_shoubu);// 0/1/2のどれか
    echo $pc_shoubu[$key];
     

?>
<br>
<h2>結果は・・・</h2>

<?php
  if ($shoubu == $key) {
        echo '<h3>引き分けです</h3>';

    } elseif ($shoubu =='goo' && $key == 'choki') {
      echo '<h3>あなたの勝ちです</h3>';

    } elseif ($shoubu =='goo' && $key == 'pa') {
      echo '<h3>あなたの負けです</h3>';

    } elseif ($shoubu =='choki' && $key == 'pa') {
      echo '<h3>あなたの勝ちです</h3>';

    } elseif ($shoubu =='choki' && $key == 'goo') {
      echo '<h3>あなたの負けです</h3>';

    } elseif ($shoubu =='pa' && $key == 'goo') {
      echo '<h3>あなたの勝ちです</h3>';

    } elseif ($shoubu =='pa' && $key == 'choki') {
      echo '<h3>あなたの負けです</h3>';
    }

echo '</br>';

echo '<input type="button" onclick="history.back()" value="もう一回勝負">';
   

?>



  
</body>
</html>