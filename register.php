<?php

mysql_connect('br-cdbr-azure-south-a.cloudapp.net','bd8889dfe8683e','c01f79fa') or die(mysql_error());

mysql_select_db('acsm_a3ae6514dd1df7c') or die(mysql_error());

$sql=mysql_query("SELECT * FROM user") or die(mysql_error());

?>
<form>
	<table>
		<tr>
			<td>Nama<td>
			<td>Email</td>
		</tr>
		<tr><?php
			while($row= mysql_fetch_array($sql)){		
				echo "<td>".$row['Username']."<td>";
				echo "<td>".$row['Password']."<td>";
			}
			?>
		</tr>
			</table>
</form>