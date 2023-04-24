<h3>字串取代</h3>
<h4>將aadd5g6w6W7123改成*************<h4>
<?php
$str = "aadd5g6w6W7123";
echo str_replace(['a', 'd', 'w', 1, 2, 3], '*', $str);
echo "<br>";
echo str_repeat("*", strlen($str));
?>
<h3>字串分割</h3>
<h4>將”this,is,a,book”依”,”切割後成為陣列</h4>
<?php
$str = "this,is,a,book";
$ex = explode(",", $str);
echo "<pre>";
print_r($ex);
echo "</pre>";
?>

<h3>字串組合</h3>
<h4>將上例陣列重新組合成“this is a book”</h4>
<?php
echo join(" ", $ex);
?>

<h3>子字串取用</h3>
<h4>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h4>
<?php

$str2 = "The reason why a great man is great is that he resolves to be a great man";
echo substr($str2, 0, 10)."...";
echo "<br>";

$str="學會PHP網頁程式設計</span>，薪水會加倍，工作會好找";
$target="程式設計";
$replace="<span style='font-size:32px;color: red'>$target</span>";
echo str_replace($target,$replace,$str);

echo "<hr>";
$split=explode($target,$str);
echo "<pre>";
print_r($split);
echo "</pre>";
echo join($replace,$split);


?>

