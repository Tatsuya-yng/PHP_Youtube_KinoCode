<?php

class Student {
    function avg($math,$english){
        echo (($math+$engilsh)/2)."\n";
    }
}

$a001 = new Student();
$a001->avg(80,70);