<!DOCTYPE html>
<html>
<head>
	<title>九九乘法表</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
			/* margin: auto; */
		}
	</style>
</head>
<body>

	<table>
		<?php
		for ($i = 0; $i <= 9; $i++) {
			// 外層程式碼
			
			echo "<tr>";
			echo "<td>";
			echo $i;
			echo "</td>";
	
			for ($j = 0; $j <= 9; $j++) {
				// 內層程式碼
				// echo "<td>";
				// echo "</td>";
				if($i<=0){
					// echo "<td>";
					echo "$j";
					// echo "</td>";
				}				
				echo "<td>";
				echo $i * $j;
				echo "</td>";			
			}
			
			
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>

