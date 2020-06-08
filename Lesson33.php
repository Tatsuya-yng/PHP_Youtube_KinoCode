<?php
// break
// break文は、ある条件にあてはまったとき、繰り返し処理を終了させる

for($i = 0; $i <= 4; $i++){
    if($i == 3){
    break;
    }
    echo ("$i")."\n";
}