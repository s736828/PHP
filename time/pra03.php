<style>
table{
    border-collapse: collapse;
}
td{
    border: 1px solid gray;
    padding: 5px 10px;
}
</style>
<h3>月曆</h3>
<?php
$today=strtotime("now");//可以改任何日期參數，例:2023-5-2
echo $today;
$month=date("n",$today); //月份
$days=date("t",$today); //天數
$firstDate=date("Y-n-1",$today); //第一天
$finalDate=date("Y-n-t",$today); //t最後一天
$firstDateWeek=date("w",strtotime($firstDate)); //星期六6 
$finalDateWeek=date("w",strtotime($finalDate)); //星期日0
$weeks=ceil(($days+$firstDateWeek)/7);

$firstWeekSpace=$firstDateWeek-1;

echo "<hr>";
echo "月:".$month;
echo "<br>";
echo "天數:".$days;
echo "<br>";
echo "第1天:".$firstDate;
echo "<br>";
echo "最後1天:".$finalDate;
echo "<br>";
echo "第1天星期:".$firstDateWeek;
echo "<br>";
echo "最後1天星期:".$finalDateWeek;
echo "<br>";
echo "週數:".$weeks;
echo "<br>";

echo "firstWeekSpace:".$firstWeekSpace;

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        if($i==0){
            if($j<$firstDateWeek){
                echo "&nbsp;";  
            }else{
                echo $j+7*$i-$firstWeekSpace;//第一週第一天
            }
        }else if($i==$weeks-1){
            if($j>$finalDateWeek){
                echo "&nbsp";
            }else{
                echo $j+7*$i-$firstWeekSpace;//最後一週最後一天
            }

        }else{
            echo $j+7*$i-$firstWeekSpace; //中間天數
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";