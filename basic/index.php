<?php
//單引號為字串表示
$name='mack';
$age=48;
$total=10*100;
// 伺服器端執行↑
// 前端瀏覽器執行↓
echo "<span style='color:blue; font-size:20px'>";
echo "對於php來說html的語法都是字串<br>";
echo "名字是: ";
echo $name;
echo "</span>";
echo "<span style='color:green; font-size:20px'><br>";
echo "年齡是:";
echo $age;
echo "</span>";
echo "<span style='color:red; font-size:20px'><br>";
echo "總價是:";
echo $total;
echo "</span><br>";

define("PI",3.1415);
echo PI;
echo "<br>";
echo 10*10*PI;
// 單引號包起來的一定是字串，雙引號包起來的並一定是字串
echo "<hr>";
// 可變變數
$name='mack';
$jerry=50;
$$name=60;
echo $mack;
echo "<br>";
echo $jerry;
echo "<br>";
echo $$name;


// php的結尾符號
?>