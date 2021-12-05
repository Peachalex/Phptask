<?php
$fruits = ["apple","orange","watermelon","lime","avocado"];
$fruits[1] = "pear";
unset($fruits[3]);

foreach ($fruits as $key=>$item){
    echo "$key => $item", "<br/>";
}

