<?php
function getUnlimitedArgs(...$para){
    foreach ($para as $arg){
        echo $arg . "</br>";
    }
}
getUnlimitedArgs('apple','orange','long','sword','pool','bool');
