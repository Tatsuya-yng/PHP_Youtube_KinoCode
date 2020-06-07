<?php
// PHPの場合、Trueのときは「1」が代入され、Falseのときは何も代入される。
$a = 10;
$b = 1;
$bool01 = ($a > $b);

echo $bool01."\n";
echo gettype($bool01)."\n";