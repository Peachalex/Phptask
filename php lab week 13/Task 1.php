<?php
$fruits = ["apple","orange","watermelon","lime","avocado"];
$fruits[1] = "pear";
unset($fruits[3]);
echo sizeof($fruits), "</br>",
     count($fruits), "</br>";
