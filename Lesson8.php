<?php
// PHPのデータ型は、「gettype()」を使用して確認する事が出来る。
// num01は、整数型の「integer」
// num02は、小数点型の「float」となるはずだが、PHPの仕様により、「float」の場合には 「double」が返される。

$num01 = 123;
$num02 = 1.23;

echo gettype($num01)."\n";
echo gettype($num02)."\n";