<?php
echo "<h1>找出五百年內的閏年</h1>";
echo "2023 ~ 2523";
echo "<br>";
$years=[];
for($year=2023;$year<2523;$year++){
    if(($year%4 == 0)&&($year%100 !=0)||($year%400 == 0)){
        $years[]=$year;
    }
}
foreach($years as $year){
    echo $year ."<br>";
}

$t=2354;
// ↓回傳true或false
if(in_array($t,$years)){
    echo $t."是閏年";
}else{
    echo $t."是平年";
}

// ↓如果找不到string或int，就會回傳false
if(array_search($t,$years)!=false){
    echo $t. "是閏年";
}else{
    echo $t. "是平年";
}

echo "<hr>";
echo "<h1>計算天干地支年</h1>";
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];



$skyland=[];
for($i=0;$i<60;$i++){
    //取餘數，.是把字串合併在一起
    $skyland[]=$sky[$i%10].$land[$i%12];
}

$year=2053;
$startYear=1024; //甲子年
echo "給定西元年".$year;
$index=($year-$startYear)%60; //取餘數
echo "<br>天干地支年為".$skyland[$index] ;

// echo "<pre>";
// print_r($skyland);
// echo "</pre>";

echo "<hr>";
echo "<h1>反轉陣列</h1>";
echo '給定陣列 $a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]';

$a=[2,4,6,1,8];
echo "<pre>";
echo "原陣列:<br>";
print_r($a);
echo "</pre>";

$times=ceil(count($a)/2); //3
$maxIndex=count($a)-1; //4

for($i=0;$i<$times;$i++){
    $tmp=$a[$i];
    //交換，索引0給第3個變數tmp，
    $a[$i]=$a[$maxIndex-$i];
    //最大索引給最小索引
    
    $a[$maxIndex-$i]=$tmp;
    //索引0再丟回給最大索引，完成交換
}

echo "<pre>";
echo "反轉陣列:<br>";
print_r($a);
echo "</pre>";

?>