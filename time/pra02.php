<h3>利用date()函式的格式化參數，完成以下的日期格式呈現<h3>
        <ul>
            <li>2023/04/24</li>
            <li>4月24日 Monday</li>
            <li>2023-04-24 14:9:5</li>
            <li>2023-04-24 14:09:05</li>
            <li>今天是西元2023年4月24日 上班日(或假日)</li>
        </ul>
        <?php
        echo date("Y/m/d");
        echo "<br>";
        
        echo date("n月j日 l");
        echo "<br>";
        
        echo date("Y-n-j G:") . (int)date("i") . ":" . (int)date("s");
        echo "<br>";
        // G不補零的小時, i补零的分钟，s补零的秒

        echo date("Y-m-d H:i:s");
        // H補零的小時, i補零的分鐘，s補零的秒
        echo "<br>";
        
        echo "今天是西元";
        echo date("Y年n月j日");
        echo date("N") >= 6 ? "是假日" : "是工作日";
        // N數字表示星期幾
        echo "<hr>";
        
        $today = strtotime("now");
        $week = date("N", $today);
        echo $week;
        echo "<br>";

        $gap = 1 - $week;
        $seconds = strtotime("$gap days", $today);

        $monday = date("Y-m-d l", strtotime("$gap days", $today));
        echo $monday;

        for ($i = 0; $i < 5; $i++) {
            echo date("Y-m-d l", strtotime("+$i week", $seconds));
            echo "<br>";
        }

        ?>