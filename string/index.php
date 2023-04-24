<?php
echo "<h4>substr() / mb_substr() 從原字串中取出部份字串</h4>";
$str = "今天天氣很好";
$str2 = "Today is a good day";
echo $str;
echo "<br>";
echo substr($str, 3, 6); //中文字為3個字元,index起啟從0開始算
echo "<br>";
echo substr($str2, 0, 4);
echo "<br>";

echo mb_substr($str, 0, 5);
echo mb_substr($str2, 0, 3);
echo "<br>";

echo "<h3>mb_substr()可以中英混合取子字串</h3>";
$str3 = "中a英 b混c 合 d取 e子f字g串";
echo mb_substr($str3, 2, 7);
echo "<br>";
//substr的效能比較好，和mb_substr差異在效能，不過現在硬體技術很快，所以差異不大

$str = "    今天 天氣 很好    ";
$str2 = " 今天 天氣 很好 ";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo "<h4>trim()去除頭尾空白</h4>";
echo trim($str);
echo "<br>";
echo trim($str2);
echo "<br>";

echo "<h4>str_repeat()重覆特定字元</h4>";
$str = "YA";
echo str_repeat($str, 10);
echo $str;
echo "<br>";

echo "<h4>str_replace()取代字串</h4>";
$str = "今天天氣很好";
$replace = "很糟";
echo str_replace("很好", $replace, $str);
echo "<br>";
echo str_replace("很好", $replace, str_replace("天", "日", $str));
echo "<br>";
echo str_replace(["天", "很好"], ["日", $replace], $str);

echo "<h4>explode()	以特定字串/字元/符號分割字串</h4>";
$str = "人工智,已經業術語，代指能執,行複雜程式動輸入，比如與顧通或下棋。這個詞常欄位交換，包括機器學習 (ML) 和深度學習。但實際上是有區別的。舉例來說，機器學習著重料中學習。雖然所有機器都屬於 AI，為了完全發";
$ex = explode("，", $str);
echo $str;
echo "<br>";
echo "<pre>";
print_r($ex);
echo "</pre>";
echo "<br>";

$file="list.doc";
$sub=explode(".",$file);
echo "<pre>";
print_r($sub);
echo "</pre>";
echo $sub[1];

echo "<h4>implode() / join()以特定字串/字元/符號將陣列元素合併成字串</h4>";
echo "<hr>";
echo implode("^^^",$ex);
echo "<hr>";
echo join("B11b",$ex);
echo "<hr>";

echo "<h4>mb_strpos()返回某字元在字串中首次出現的位置</h4>";
$str="今天天氣很好";
$str2 = "Today is a good day";
$search="氣很";
echo mb_strpos($str,$search);
echo "<br>";

echo "<h4>mb_strlen()找字串長度</h4>";
echo mb_strlen($str);
echo "<br>";
echo mb_strlen($str2);




echo "<p>&nbsp</p>";
echo "<p>&nbsp</p>";
echo "<p>&nbsp</p>";
echo "<p>&nbsp</p>";



