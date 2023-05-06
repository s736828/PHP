<style>
    .area-1,
    .area-2 {
        display: inline-block;
        width: 35px;
        height: 35px;
        border: 1px solid #ccc;
        line-height: 33px;
        text-align: center;
        border-radius: 50%;
        margin: 0.5rem;
    }

    .area-1 {
        background-color: #0f0;
    }

    .area-2 {
        background-color: orange;
    }
</style>

<?php
$nine = [];
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        $nine[] = "$j X $i = " . $i * $j;
    }
}
// echo "<pre>";
// print_r($nine);
// echo "</pre>";

foreach ($nine as $k => $str) {
    echo $str;
    // 除9餘數=8的話，就換行。
    // 當$k為索引8,17,26,35,44,53,62,71時，除9餘數都等於8，執行換行
    if ($k % 9 == 8) {
        echo "<br>";
    }
}
echo "<hr>";
echo "<h3>威力彩</h3>";

$lotto = [];
while (count($lotto) < 6) {
    $tmp = rand(1, 38);
    //echo "亂數產生的數字".$tmp;
    if (!in_array($tmp, $lotto)) {
        //echo "沒有重覆的數字，所以寫入陣列" .$tmp;
        $lotto[] = $tmp;
    }
    // echo "<pre>";
    // print_r($lotto);
    // echo "</pre>";
}
foreach ($lotto as $num) {
    echo "<span class='area-1'>" . $num . '</span>';
}
// echo "<br>";
echo "<span class='area-2'>" . rand(1, 8) . '</span>';

?>