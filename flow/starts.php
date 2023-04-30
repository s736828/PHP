<style>
    * {
        font-family: 'Courier New', Courier, monospace
    }
</style>

<h2>直角三角形</h2>
<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < ($i + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
?>

<h2>倒直角三角形</h2>
<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (5 - $i); $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<h2>正三角形</h2>
<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp";
    }
    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>

<h2>菱形</h2>
<?php
//for 0~5 印空白
//for 印*
//for 0~4 印空白
//for 印*
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < $i + 1; $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < ((3 - $i) * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
<h2>菱形二</h2>
<?php

$tmp = 0;
for ($i = 0; $i < 9; $i++) {
    // if($i<5){
    //     $tmp=$i;
    // }else{
    //     $tmp=8-$i;
    // }
    //if判斷式如果只有一行的話，就可以變成三元運算式
    $tmp = ($i < 5) ? $i : 8 - $i;

    for ($j = 0; $j < (4 - $tmp); $j++) {
        echo "&nbsp";
    }
    for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

?>

<h2>菱形三</h2>

<h2>矩形</h2>
<?php
// 條件 $i=0,$i=$n , $j=0,$j=$n
//終級寫法，只要改一個n數值，就可以變大小
$n = 10;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        // echo "*";
        if ($i == 0 || $i == ($n - 1)) {
            echo "*";
        } else if ($j == 0 || $j == $n - 1) {
            echo "*";
        } else {
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>

<h2>矩形對角線</h2>
<?php
//條件 $i=0,$i=$n , $j=0,$j=$n , $i==$j , $i+$j==$n-1
//終級寫法，只要改一個n數值，就可以變大小
$n = 7;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == 0 || $i == ($n - 1)) {
            echo "*"; //第一行及最後一行
        } else if ($j == 0 || $j == $n - 1 || $i == $j || $i == $n - 1 - $j) {
            //最好只要有單邊的計算式，不要雙邊的==例如: $i+$j==$n-1
            // 斜線\為$i==$j, 斜線/為$i+$j==$n-1
            echo "*";
        } else {
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>

<h2>菱形對角線</h2>