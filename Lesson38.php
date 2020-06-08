<?php
// 確認問題

for($a = 1; $a <= 10; $a ++){
    if($a == 2){
        continue;
    }   else if($a == 7){
        break;
    }   else{
        echo $a."\n";
    }

}