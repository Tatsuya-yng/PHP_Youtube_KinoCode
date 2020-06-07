<?php
// 小数点型の正しいデータ型を知るには、var_dumpを使う。

$num01 = 123;
$num02 = 1.23;

echo gettype($num01)."\n";
echo gettype($num02)."\n";
var_dump($num02)."\n";