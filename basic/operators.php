<?php
$check = false;
echo $check;
echo !$check;
// !驚嘆號是反向, 把false變true
// false不會顯示，true會顯示1

echo "<hr>";
$price = 125;
echo $price;
$price++;
echo $price;
$price--;
echo $price;
echo ++$price;

echo "<hr>";
$num1 = 10;
$num2 = 25;
echo '$num1=' . $num1;
echo "<br>";
echo '$num2=' . $num2;
echo "<br>";
echo "+ = >";
echo $num1 + $num2;
echo "<br>";
echo "- = >";
echo $num1 - $num2;
echo "<br>";
echo "* = >";
echo $num1 * $num2;
echo "<br>";
echo "/ = >";
echo $num1 / $num2;
echo "<br>";
echo "% = >";
echo $num1 % $num2;
// 1%2=1
// 2%2=0
// 3%2=1
// 4%2=0
// 餘數用法做開關切換 on或off 10101010....
// 1%4=1 初始亮度
// 2%4=2 微亮
// 3%4=3 最亮
// 4%4=0 關
// 5%4=1 開
// 可拿來做燈的開關，12301230130...可計算檯燈的使用壽命

$name = '劉勤永';
[$name => '劉勤永'];
/*
=> //胖箭頭 fat arrow
-> //瘦箭頭 arrow
*/
echo "<hr>";
$score = 59;
$level = ($score >= 60) ? '及格' : '不及格';
echo $level;
echo "<hr>";
// 以上程式碼相當於
$score = 60;
if ($score >= 60) {
    $level = '及格';
} else {
    $level = '不及格';
}
echo $level;
echo "<hr>";

$a = '狗';
$b = '貓';
echo '$a=' . $a;
echo '$b=' . $b;
echo "<br>";
//交換後
$dog = $a;
$a = $b;
$b = $dog;
echo '$a=' . $a;
echo '$b=' . $b;
echo "<hr>";

$tmp = 50;
$a = 10;
$b = 50;
$b = $a;
$a = $tmp;
echo '$a=' . $a;
echo '$b=' . $b;
echo "<hr>";

//陣列交換方式
$a = 20;
$b = 40;
echo '$a=' . $a;
echo '$b=' . $b;
echo "<br>";
[$a, $b] = [$b, $a];
echo '$a=' . $a;
echo '$b=' . $b;

echo "<hr>";
$a = 20;
$b = 40;
$b = $b - $a;
$a = $a + $b;
echo '$a=' . $a;
echo '$b=' . $b;
