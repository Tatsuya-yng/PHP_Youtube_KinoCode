<?php

 class Student {
     public $name;

     function avg($math, $english){
         echo(($math + $english)/2)."\n";
     }
 }

 $a001 = new Student();
 $a001->avg(30,70);
 $a001->name = "sato";
 echo $a001->name."\n";
 echo $a001->gender."\n";


