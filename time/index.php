<h2>時間與日期</h2>
<?php
// switch()
// date_default_timezone_set("Asia/Tokyo");
date_default_timezone_set("Asia/Taipei");

echo date("Y-m-d H:i:s");
echo "<br>";

echo strtotime("now");
echo "<hr>";

echo "<br>";
$yestoday = strtotime("now") - (60 * 60 * 24);
echo $yestoday;
echo "<br>";
echo date("Y-m-d H:i:s", $yestoday);

echo "<br>";
$today=strtotime("now");
echo "現在的時間:".$today."秒";
echo "<br>";
echo "可讀的日期字串:".date("Y-m-d H:i:s",$today);

echo "<br>";
$tomorrow=strtotime("+1 days",$today);
echo "明天:".date("Y-m-d H:i:s",$tomorrow);
echo "<br>";

$yestoday=strtotime("-1 days",$today);
echo "昨天:".date("Y-m-d H:i:s",$yestoday);
echo "<br>";

$nextWeek=strtotime("+1 week",$today);
echo "下週:".date("Y-m-d H:i:s",$nextWeek);
echo "<br>";

$lastWeek=strtotime("-1 week",$today);
echo "上週:".date("Y-m-d H:i:s",$lastWeek);
echo "<br>";



?>