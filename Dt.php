<?php

mysql_connect('br-cdbr-azure-south-a.cloudapp.net','bd8889dfe8683e','c01f79fa') or die(mysql_error());

mysql_select_db('acsm_a3ae6514dd1df7c') or die(mysql_error());

$sql=mysql_query("SELECT * FROM user") or die(mysql_error());

?>
<form action="index.php" method="POST">
	<table border=2 align="left">
		<h2>Daftar Tamu</h2>
		<tr>
			<td>Nama</td>
			<td>Tempat, tanggal lahir</td>
			<td>Alamat</td>
			<td>Email</td>
		</tr>
		<tr><?php
			while($row= mysql_fetch_array($sql)){		
				echo "<td>".$row['username']."<td>";
				echo "<td>".$row['TTL']."<td>";
				echo "<td>".$row['alamat']."<td>";
				echo "<td>".$row['email']."<td>";
			}
			?>
		</tr>
			</table>
</form>