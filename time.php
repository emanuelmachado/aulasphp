<?php 

$time  = time();
$milliseconds = floor(microtime(true) * 1000);

var_dump([$milliseconds, $time]);

