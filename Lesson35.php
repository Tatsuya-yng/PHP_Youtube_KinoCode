<?php
// for文のネスト
// for文の中にfor文が入っている構造のことをfor文のネスト

for($i = 0; $i <= 2; $i ++){
    for($j = 0; $j <= 2; $j ++){
        echo $i.'-'.$j."\n";
    }
}