<!DOCTYPE html>
<html>
<head>
	<title>Baca Excell</title>
</head>
<body>

<h1>Baca Excell</h1>


<table  border="1">
<?php 

	foreach ($data_excell as $key => $value) {
		# code...
		echo "\t<tr>\n";

		foreach ($value as $dt) {
			echo "\t\t<td>$dt</td>\n";
		}
		echo "\t</tr>\n";
	}
 ?>
 </table>


 	
 </table>
</body>
</html>