<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<h2>足し算引き算掛け算方法</h2>
  
<ul>
<li>print X+Y;</li>
<li>prunt X-Y;</li>
<li>prunt X*Y;</li>
<li>prunt X/Y;</li>
<li>prunt'X%Y’・・・これは余り';</li>

</ul>
<?php
print'足し算';
print'</br>';

print 5+5;
?>


<h2>カウントアップの方法</h2>

whileは条件式を繰り返す<br>
ループする<br>
breakでループを抜ける

<br>

$x=1

whie(条件){<br>
    if(xを３で割って余り０)){<br>
    fizzと表示<br>
    } <br>
print $X+1;
}
<br>

if重ねたら出来る？

}
<br>
<br>

上はメモなので気にしないでください
<br>
<br>


<?php

$x=1;
print"1</br>";
while($x<=100){
   $x=$x+1;
   if($x%3==0&&$x%5==0){
     print"fizzbuzz</br>";
   }else{
    if($x%3==0){
      print 'fizz</br>';
    }elseif($x%5==0) {
      print'buzz</br>';

    }else{
      print "$x</br>";
    }
  }
}

?>


</body>
</html>