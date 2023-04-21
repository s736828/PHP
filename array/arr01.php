<style>
    table{
        border-collapse: collapse;
    }
    td{
        
        border: 1px solid black;
        padding: 5px 10px;
    }

</style>
<?php
// $students=['judy'=>['國文','英文','數學','地理','歷史']];


$students=[
'國文'=>['judy'=>95,'amo'=>88,'john'=>45,'peter'=>59,'hebe'=>71],
'英文'=>['judy'=>64,'amo'=>78,'john'=>60,'peter'=>32,'hebe'=>62],
'數學'=>['judy'=>70,'amo'=>54,'john'=>68,'peter'=>77,'hebe'=>80],
'地理'=>['judy'=>90,'amo'=>81,'john'=>70,'peter'=>54,'hebe'=>62],
'歷史'=>['judy'=>84,'amo'=>71,'john'=>62,'peter'=>42,'hebe'=>64]];
// echo "<pre>";
// print_r($students);
// echo "</pre>";

// foreach ($variable as $key => $value) {
//     # code...
// }

echo "<table>";
echo "<tr>";
echo "<td></td>";
echo "<td>judy</td>";
echo "<td>amo</td>";
echo "<td>john</td>";
echo "<td>peter</td>";
echo "<td>hebe</td>";
echo "</tr>";
foreach ($students as $stu => $scores) {
    echo "<tr>";
    echo "<td>$stu</td>";
    foreach ($scores as $sub => $score) {
        echo "<td>$score</td>";       
    }
    echo "</tr>";
}
echo "</table>";

?>