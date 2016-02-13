<?php

mysql_connect('br-cdbr-azure-south-a.cloudapp.net','bd8889dfe8683e','c01f79fa');

mysql_select_db('study');

$sql=mysql_query("SELECT * FROM user");

while($row= mysql_fetch_array($sql)){
	echo $row['username']."</br>";
}

if (isset($_POST['Username'], $_POST['Password'])){
	mysql_query("INSERT INTO user VALUES ('".$_POST['Username']."','".$_POST['Username']."')");
}

?>

<form action="index.php" method="POST">
	<table align="center">
		<tr colspan=2>
			<td><h2>LOGIN</h2><td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="Username"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="Password"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="Submit"/></td>
		</tr>
		<tr>
			<td><a href="index.php">Login</a></td>
			<td><a href="register.php">Daftar Tamu</a></td>
			<td><a href="form.html">Isi Biodata</a></td>
		</tr>
	</table>
</form>