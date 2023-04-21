<?php
$a[1] = "A";
$a['001'] = "B";
$a['name'] = "John";
$a['parent_name'] = "mack";
echo "<pre>";
print_r($a);
echo "</pre>";

$b[] = "B";
$b[] = "C";
$b[] = "D";
$b[] = "E";
$b[] = "F";
echo "<pre>";
print_r($b);
echo "</pre>";

$c = ["A", "B", 'C'];
$c[] = "D";
$c['total'] = 4;
$c[] = "E";
$c['total'] = 5;
// $c=[5=>"G","H",'I'];

echo "<pre>";
print_r($c);
echo "</pre>";


echo $b[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a['001'];
echo "<br>";
echo $a['name'];
echo "<br>";
echo $a['parent_name'];
echo "<br>";
echo $c[0];
echo "<hr>";

$dd = "BBB";
//檢查是否為陣列
$check = is_array($dd);
// if(is_array($dd))
if ($check) {
    echo "是陣列";
} else {
    echo "不是陣列";
}
echo "<br>";

//檢查某值是否在陣列中
if (in_array("D", $c)) {
    echo "D 在陣列中";
} else {
    echo "D 不在陣列中";
}

$d = [53, "A", 69, 75, 15, 25, "D"];

echo "<pre>";
print_r($d);
echo "</pre>";

//排序陣列
//call by value 大熊
//call by reference  紮小人(有&)
$result = sort($d);
echo "<pre>";
print_r($d);
echo "</pre>";
echo $result; //不管有沒有排列都是true印出1，好像沒啥意義

//反序排序陣列
rsort($d);
echo "<pre>";
print_r($d);
echo "</pre>";

//在陣列中填滿某值
$fill = array_fill(4, 10, "hi");
echo "<pre>";
print_r($fill);
echo "</pre>";

//在陣列中尋找某值，回覆索引的位置
echo array_search("15", $d);
echo "<br>";
echo $d[4]; //會印出排序後的值

echo "<hr>";

//將key或index取出為一個陣列
$keys = array_keys($d);
echo "<pre>";
print_r($keys);
echo "</pre>";

$keys = array_keys($a);
echo "<pre>";
print_r($keys);
echo "</pre>";

//合併陣列
$merge = array_merge($a, $b);
echo "<pre>";
print_r($merge);
echo "</pre>";

//序列化，字串化陣列
$seA = serialize($a);
echo $seA;
//反序列化/陣列化字串
$ueB = unserialize($seA);
echo "<pre>";
print_r($ueB);
echo "</pre>";

//以字串或符號把陣列轉為字串
$s = implode('^^^', $a);
echo $s;

//????
$array = explode('^^^', $s);
echo "<pre>";
print_r($array);
echo "</pre>";


?>