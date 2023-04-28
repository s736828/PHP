<style>
    table {
        border-collapse: collapse;
        /* border-spacing: 0; */
    }

    td {
        border: 1px solid gray;
        padding: 5px 10px;
    }
</style>
<h3>月曆</h3>
<?php
$today = strtotime("now"); //可以改任何日期參數，例:2023-5-2
echo $today;
$month = date("n", $today); //月份
$days = date("t", $today); //天數
$firstDate = date("Y-n-1", $today); //第一天
$finalDate = date("Y-n-t", $today); //t最後一天
$firstDateWeek = date("w", strtotime($firstDate)); //星期六6 
$finalDateWeek = date("w", strtotime($finalDate)); //星期日0
$weeks = ceil(($days + $firstDateWeek) / 7);

$firstWeekSpace = $firstDateWeek - 1;

echo "<hr>";
echo "月:" . $month;
echo "<br>";
echo "天數:" . $days;
echo "<br>";
echo "第1天:" . $firstDate;
echo "<br>";
echo "最後1天:" . $finalDate;
echo "<br>";
echo "第1天星期:" . $firstDateWeek;
echo "<br>";
echo "最後1天星期:" . $finalDateWeek;
echo "<br>";
echo "週數:" . $weeks;
echo "<br>";

echo "firstWeekSpace:" . $firstWeekSpace;

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
//使用迴圈來畫出當月週數
for ($i = 0; $i < $weeks; $i++) {
    echo "<tr>";
    //使用迴圈來畫出當週的天數
    for ($j = 0; $j < 7; $j++) {
        echo "<td>";
        if ($i == 0) { //判斷是否為第一周
            // echo ($j<$firstDateWeek)?'&nbsp':$j+7*$i-$firstWeekSpace;
            if ($j < $firstDateWeek) {
                echo "&nbsp;";
            } else {
                echo $j + 7 * $i - $firstWeekSpace; //第一週第一天
            }
        } else if ($i == $weeks - 1) { //判斷當周是否為最後一週
            if ($j > $finalDateWeek) {
                echo "&nbsp";
            } else {
                echo $j + 7 * $i - $firstWeekSpace; //最後一週最後一天
            }
        } else {
            echo $j + 7 * $i - $firstWeekSpace; //中間天數
            //如果$批最後1天的星期大，則印出日期
            //日期公式為(當周天數-周數*7-第一周的空白日數)
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

//三元運算式簡化寫法
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
for ($i = 0; $i < $weeks; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        echo "<td>";
        echo (($i == 0 && $j < $firstDateWeek) || (($i == $weeks - 1) && $j > $finalDateWeek))
            ? '&nbsp' : $j + 7 * $i - $firstWeekSpace;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";


//陣列寫法
$days = [];
for ($i = 0; $i < $weeks; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if (($i == 0 && $j < $firstDateWeek) || (($i == $weeks - 1) && $j > $finalDateWeek)) {
            $days[] = '&nbsp';
        } else {
            $days[] = $j + 7 * $i - $firstWeekSpace;
        }
    }
}
echo "<pre>";
print_r($days);
echo "</pre>";

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
for ($i = 0; $i < count($days); $i++) {
    echo ($i % 7 == 0) ? "<tr>" : ''; //$i=0，7，14，21，28，35換行，=1~6印空白
    echo "<td>";
    echo $days[$i];
    echo "</td>";
    echo ($i % 7 == 6) ? "</tr>" : '';
}
echo "</table>";
?>




<style>
    .calendar>div {
        border: 1px solid #ccc;
        width: calc(100%/7);
        box-sizing: border-box;
        margin-left: -1;
        margin-top: -1;
    }

    .calendar {
        display: flex;
        flex-wrap: wrap;
        width: 50%;
        margin-left: 1;
        margin-top: 1;
    }
</style>
<div class='calendar'>
    <div>日</div>
    <div>一</div>
    <div>二</div>
    <div>三</div>
    <div>四</div>
    <div>五</div>
    <div>六</div>
    <?php
    for ($i = 0; $i < count($days); $i++) {
        echo "<div>{$days[$i]}</div>";
    }


    ?>
</div>