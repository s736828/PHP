<h2>給定兩個日期，計算中間間隔天數</h2>
<div>2023-04-24</div>
<div>2023-10-07</div>

<?php
$start = strtotime("2023-04-24");
$end = strtotime("2023-10-07");

$gap = ($end - $start) / (24 * 60 * 60);

echo "距離" . date("Y-m-d", $end) . "還有" . $gap . "天";
?>

<h2>計算距離自已下一次生日還有幾天</h2>
<?php
$now=strtotime("now");
$now = strtotime(date("Y-m-d"));
$birthday = strtotime("2023-12-19");
echo $now;
echo "<br>";
echo $today;
echo "<br>";
echo $birthday;
echo "<br>";

$days = ($birthday - $now) / (24 * 60 * 60);
echo "距離下一次的生日" . date("Y-m-d", $birthday) . "還有" . $days . "天";
?>