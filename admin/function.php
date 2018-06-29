<?php

function convertDate($date){
    $newDate =  substr($date,6,2).'/'.substr($date,4,2).'/'.substr($date,0,4);
    return $newDate;
    }
    
?>