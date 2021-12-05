<?php
$length = $_GET['n'];
$len = (int)$length;
$foo = array_fill(0,$len,'false');
print_r($foo);