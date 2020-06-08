<?php

//contine
// contine文は、繰り返し処理で、ある条件にあてはまったときにその処理をスキップしたい場合に使う。

for($i = 0; $i <= 4; $i ++){
    if($i == 3){
        continue;
    }
    echo $i."\n";
}
