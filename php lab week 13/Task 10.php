<?php
function sum($param1,$param2){
    if(is_numeric($param1) && is_numeric($param2)){
        $sum = $param1 + $param2;
        echo "The sum of two number is " . "$sum" . "</br>";
    }else{
        echo "false" . "</br>";
    }
}
sum("apple",5);
sum(7,11);
sum(9,12);
sum('hello',3);
sum('4','4');