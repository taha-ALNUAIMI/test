<?php 
/*
class summ{
    public $a;
    public $b;
    public function ss($aa,$bb){
        $this->a=$aa;
        $this->b=$bb;
        return $this->a+$this->b;
    }
}
$ssum=new summ();
echo $ssum->ss(10,5);
 */

class summ{
    public $a;
    public $b;
    public function __construct(){
        $this->a=3;
        $this->b=9;
        
        echo $this->a+$this->b;
    }
}
$ssum=new summ();

?>