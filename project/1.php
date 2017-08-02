<?php

class ho_many{

    static $counter;

    function __construct(){
       

    self::$counter++;
    

    }

}

new ho_many();
new ho_many();
new ho_many();


echo ho_many::$counter;



?>