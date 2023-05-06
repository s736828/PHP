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
$today1 = strtotime("2023-5-2"); //可以改任何日期參數，例:2023-5-2
$today = strtotime("now"); //取得當前的時間秒數
$month = date("n", $today); //取得當前的月份
$days = date("t", $today); //取得當前月份的總天數
$firstDate = date("Y-n-1", $today); //取得當前月份第一天
$finalDate = date("Y-n-t", $today); //取得當前月份最後一天
$firstDateWeek = date("w", strtotime($firstDate)); //取得當前月份第一天的星期
$finalDateWeek = date("w", strtotime($finalDate)); //取得當前月份最後一天的星期
$weeks = ceil(($days + $firstDateWeek) / 7); //計算當前月份的天數會佔幾周
$firstWeekSpace = $firstDateWeek - 1; //計算當前月份第一周的空白日(或前一個月份佔幾天)

echo $today1 . "<br>";
echo $today;
echo "<hr>";
echo "月份:" . $month;
echo "<br>";
echo "總天數:" . $days;
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

echo "當月第一週空白日為幾天?" . $firstWeekSpace;

//先畫出固定的表頭內容
echo "<table>";
echo "<tr>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "<td>日</td>";
echo "</tr>";
//使用迴圈來畫出當月週數
for ($i = 0; $i < $weeks; $i++) {
    echo "<tr>";
    //使用迴圈來畫出當週的天數
    for ($j = 0; $j < 7; $j++) {
        echo "<td>";
        if ($i == 0) { //判斷當周是否為第一周
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
//使用迴圈來畫出當前月的周數
for ($i = 0; $i < $weeks; $i++) {
    //使用迴圈來畫出當周的天數
    for ($j = 0; $j < 7; $j++) {
        //判斷當周是否為第一周或最後一周
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
        margin-left: -1px;
        margin-top: -1px;
    }

    .calendar {
        display: flex;
        flex-wrap: wrap;
        width: 50%;
        margin-left: 1px;
        margin-top: 1px;
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