<?php

function convertDate($date){
    $newDate =  substr($date,6,2).'/'.substr($date,4,2).'/'.substr($date,0,4);
    return $newDate;
}
function ThaiIToUTF8($in) {
    $out = "";
    for ($i = 0; $i < strlen($in); $i++)
    {
    if (ord($in[$i]) <= 126)
    $out .= $in[$i];
    else
    $out .= "&#" . (ord($in[$i]) - 161 + 3585) . ";";
    }
    return $out;
} 

?>