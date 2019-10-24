<?php


//煮物の作り方
trait Nimono{
  public $name;
  
  public function cut () {
    echo "材料を切ってください\n";
  }

  public function set_fire () {
    echo "コンロに火をつけて切った材料を鍋にいれてください\n";
  }

  public function stir_fry() {
    echo "適度に炒めてください\n";
  }

  public function boil() {
    echo "出汁・醤油・砂糖・塩・みりん・酒を入れて味を調え、具材がやわらかくなるまで煮込みます\n";
  }

  public function complete($name) {
     echo $name."料理の完成です\n";
  }
}


//カレーにするためには

abstract class Curry{
  abstract public function Curry_roux(); 
}


//シチューにするためには

abstract class Stew{
  abstract public function stew_roux(); 

}


//更に美味しくするには

interface Grade_up{
  public function one_night();
}


//調理します

class Nikujaga{
  use Nimono;
}

$nikujaga = new Nikujaga();
echo $nikujaga->name ="肉じゃが\n";
echo $nikujaga->cut();
echo $nikujaga->set_fire ();
echo $nikujaga->stir_fry();
echo $nikujaga->boil();
echo $nikujaga->complete("肉じゃが");

//カレーを作ります



class Curry_cook extends Curry{
  use Nimono;
  
  public function boil() {
    echo "出汁・醤油・砂糖・塩・みりん・酒を入れて味を調え、具材がやわらかくなるまで煮込みます\n";
  }

  public function Curry_roux() {
    echo "更に10分間煮込みます\n";
  }

  public function complete($name) {
     echo $name."料理の完成です\n";
  }
  

}

$curry = new Curry_cook;
echo $curry->name ="カレー\n";
echo $curry->cut();
echo $curry->set_fire ();
echo $curry->stir_fry();
echo $curry->boil();
echo $curry->complete("カレー");


//1日寝かせたカレーを作ります

class Special_curry_cook extends Curry_cook implements Grade_up {
  public function one_night() {
    echo "更に美味しくするには、1日寝かせます\n";
  }
  
}

$Sp_curry = new Special_curry_cook;
echo $Sp_curry->name ="寝かせたカレー\n";
echo $Sp_curry->cut();
echo $Sp_curry->set_fire ();
echo $Sp_curry->stir_fry();
echo $Sp_curry->boil();
echo $Sp_curry->one_night();
echo $Sp_curry->complete("寝かせたカレー");




?>


