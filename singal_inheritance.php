<?php
class Data1{
    public $x;
    public $y;

    public function setdata($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
   

}

class Op extends Data1{
    
    public function add()
    {

        echo "Addition is ".$this->x+$this->y;
    }

    public function sub()
    {

        echo "Addition is ".$this->x-$this->y;
    }
    

}

$op1=new Op();
$op1->setdata(30,40);
$op1->add();
$op1->sub();

?>
