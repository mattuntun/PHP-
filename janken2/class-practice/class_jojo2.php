
<?php


//吸血鬼の条件
interface Vampire_conditions {
  public function put_on( $mask );
}

//吸血鬼になった後
abstract class Vampire { 
  
  abstract public function blood_sucking();
  abstract public function characteristic();
  abstract public function ban();
  abstract public function atack();
  abstract public function strange_voice($voice);

  public function dio ($quote) {
    echo $quote."ジョジョォオーッ！！";

  }
}


//人間 とは
trait Human {
  public $name;

  function __construct($name) {
    $this->name =$name;
  }

  public function action() {
    echo $this->name."は食べ物を食べます\n"
        .$this->name."は眠ります\n"
        .$this->name."はコミュニケーションが取れます\n";
  }
}



//松下が吸血鬼になるためには
class Matsushita implements Vampire_conditions{
  use Human;

  public function put_on($mask){
    echo "吸血鬼になるには".$mask."を装着してください\n";
    }
  
}
  
$quite_human = new Matsushita("松下");

$quite_human->action();
$quite_human->put_on("石仮面");



"\n";
"\n";
"\n";
"\n";
"\n";




//松下が吸血鬼になった後
class Vampire_matsushita extends vampire {
  use Human;
 
      public function blood_sucking() {
          echo $this->name."は人間の生気を吸収します\n";
      }
      
      public function characteristic() {
          echo $this->name."は不老不死に近くなります\n";
      }

      public function ban() {
          echo $this->name."は日光に当たったらダメージを受けます\n波紋攻撃が弱点です\n";
      }

      public function atack() {
          echo $this->name."は気化冷凍方で攻撃出来ます\n";
      }

      public function strange_voice($voice) {
          echo $this->name."は「".$voice."」と叫ばすにはいられなくなります\n";
      }
} 


$before_quite_human = new Vampire_matsushita("松下");

$before_quite_human->action("ディオ");
$before_quite_human->blood_sucking ();
$before_quite_human->characteristic ();
$before_quite_human->ban ();
$before_quite_human->atack ();
$before_quite_human->strange_voice ("WRRRRRYYYYYYYYY");
$before_quite_human->dio ("俺は人間をやめるぞ！！");

?>
