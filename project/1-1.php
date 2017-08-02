<?php

class ho_many{

    public $rand;

    function __construct($a,$b){
        $this->rand=mt_rand($a,$b);
       
    }
    
}
$me=new ho_many(1,10);
echo $me->rand;






?>