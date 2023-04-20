<?php

$score=60;
echo "你的成績為:".$score;
echo "<br>";
if($score>=90){
    $level="A";
}else if($score>=80){
    $level="B";
}else if($score>=70){
    $level="C";
}else if($score>=60){
    $level="D";
}else{
    $level="E";
}
echo "成績的等級為:".$level;
echo "<br>";

switch($level){
    case "A":
    echo "表現優良，請保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
    echo "是否無心學業?";
}