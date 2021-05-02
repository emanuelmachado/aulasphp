<?php


//$url = "https://www.youtube.com/watch?v=F2Bozl6RZ0s&t=35s&status=paused";
$url = "https://youtu.be/F2Bozl6RZ0s";


parse_str($url, $output); 
$valid = strrpos($url,"https://youtu.be/");
if($valid != false && $valid >= 0){
    $codeYoutube = explode("https://youtu.be/",$url);
    print_r($codeYoutube[1]);
}

//print_r($output[0] == null);
