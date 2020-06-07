<?php
// 多次元配列
// 2次元の配列
// satoは、1つ目の配列の、1番目。0の0。
// suzukiは、1つ目の配列の、2番目。、0の1。
// tanakaは、2つ目の配列の、1番目。1の0。
// takahashiは、2つ目の配列の、2番目。1の1

$a = [["sato","suzuki"],["takahashi","tanaka"]];

echo ($a[0][0])."\n";
echo ($a[0][1])."\n";
echo ($a[1][0])."\n";
echo ($a[1][1])."\n";

