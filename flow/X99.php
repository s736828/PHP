<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
    <style>
    table{
        border-collapse: collapse;
        width: 85%;
        margin: auto;
        box-shadow: 0 0 10px #999;        
    }

    td{        
        border: 1px solid black;
        padding:  5px;
        text-align: center;
    }
    td:nth-child(1),tr:nth-child(1){
        background-color: #ccc;
    }
    </style>
</head>

<body>
    <table>
    <?php
    for($i=1;$i<=9;$i++){
        echo "<tr>";
        for($j=1;$j<=9;$j++){
            echo "<td>";
            echo "$j x $i =".$i * $j;
            echo "</td>";
        }
        echo "</tr>";
}
?>
</table>

<hr>

<table>
    <?php
    for($i=0;$i<=9;$i++){        
        echo "<tr>";        
            for($j=0;$j<=9;$j++){
            echo "<td>";
            if($i==0 && $j==0){
                echo "&nbsp";//第一格空白
            }       
            else if($i==0){
                echo "$j";
            }else if($j==0){
                echo "$i";
            }
            else if($i<$j){
                echo "&nbsp";
            }              
            else{
                echo $i * $j;
            }           
            echo "</td>";     
        }
        echo "</tr>";
}
?>
</table>
</body>
</html>