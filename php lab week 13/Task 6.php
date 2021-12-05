<?php
function getargs($arg1,$arg2){
    if(is_string($arg1) && is_string($arg2)){
        if(strlen($arg1) > strlen($arg2)){
            echo "$arg1" . "</br>";
        }
        elseif(strlen($arg2) > strlen($arg1)){
            echo "$arg2" . "</br>";
        }
    }else{
        echo "false" . "</br>";
    }
}
getargs('hello','mm');
getargs("1","pop");
getargs(2, "chickens");
getargs('owl','oops');