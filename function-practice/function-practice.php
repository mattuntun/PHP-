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

 

    function anketo ($from,$specialty,$favorite) {
        print "<p>私の出身地は</p></br>";
        print "$from"."で<br/>";

        print "<p>出身地の名産品は</p></br>";
        print "$specialty"."です";

        print "<p>その中で好きなものは</P>";
        print "$favorite"."です";
    }

    if ( $from == "わかりません" ) {
      print'どこか指定して下さい';
      print'<form>';
      print '<input type="button" onclick="history.back()" value="戻る">';
      print'</form>';

       } elseif ( $specialty=='' && $favorite=='' ) {
         anketo($from,'ありません','ありません');
         print'<form>';
         print '<input type="button" onclick="history.back()" value="戻る">';
         print'</form>';

       } elseif ( $specialty == '' ) {
        anketo( $from,'ありません',$favorite );
        print'<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
       
       } elseif ($favorite == '' ) {
        anketo( $from,$specialty,'ありません' );
        print'<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';

       } else {
        anketo ( $from,$specialty,$favorite );
        print'<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
       }


    ?>


<br>

<h2>計算してみますの送信結果は以下</h2><br>

<?php

print '<h3>ifとfunction</h3>';


print "前頁の結果を反映をします</br>";

$α=$_POST['αの値'];
$β=$_POST['βの値'];
$式=$_POST['siki'];

function tashizan($α,$β) {
  print $α+$β;
}

function hikizan($α,$β) {
  print $α-$β;
}

function kakezan($α,$β) {
  print $α*$β;
}

function warizan($α,$β) {
  print $α/$β;
}


if ( $α == '' || $β == '' ) {
  print 数字を入力してください;
  print "</br>";

} elseif ( $式 == '足す' ) {
  tashizan ($α,$β);
  print "</br>";
  
} elseif ( $式 == '引く' ) {
  hikizan ($α,$β);
  print "</br>";

} elseif ( $式 == '掛ける' ) {
  kakezan ($α,$β);
  print "</br>";

} elseif ( $式 == '割る' ) {
  warizan ($α,$β);
  print "</br>";
  
}

print '<h3>switchとfunction</h3>';

if ( $α == '' || $β == '' ){
  print'値を入力してください';

 }else{

  switch ($式) {
    case'足す';
    tashizan ($α,$β);
    break;

    case'引く';
    hikizan ($α,$β);
    break;

    case'掛ける';
    kakezan ($α,$β);
    break;

    case'割る';
    warizan ($α,$β);
    break;

  }
}



?>

</body>
</html>




