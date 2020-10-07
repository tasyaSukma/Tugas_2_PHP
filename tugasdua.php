<?php
	$food = array("Cireng","Es Duren","Es Milo","Es Teh", "Es Piscok");
	$price = array(1000, 15000, 20000, 5000, 1000);
	$a = 1;

	echo "<h1>Daftar Makanan</h1>";
	echo "<table border=1>
			<tr>
				<td>No</td>
				<td>Nama Menu</td>
				<td>Harga</td>
			</tr>";
	for($i = 0 ; $i<5 ; $i++){
		echo "<tr><td>$a</td>";
		echo "<td>$food[$i]</td>";
		echo "<td>$price[$i]</td></tr>";
		$a++;
	}
	echo "</table>";
?>
