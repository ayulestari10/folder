<?php

mysql_connect('br-cdbr-azure-south-a.cloudapp.net','bd8889dfe8683e','c01f79fa') or die(mysql_error());

mysql_select_db('acsm_a3ae6514dd1df7c') or die(mysql_error());

$sql=mysql_query("SELECT * FROM user") or die(mysql_error());

if (isset($_POST['username'], $_POST['password'])){
	mysql_query("INSERT INTO user VALUES ('".$_POST['username']."','".$_POST['password']."')");
}

?>

<form action="index.php" method="POST">
	<table align="center">
		<tr colspan=2>
			<td><h2>LOGIN</h2><td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="username"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="login"/></td>
		</tr>
		<tr>
			<td><a href="index.php">Login</a></td>
			<td><a href="register.php">Register</a></td>
			<td><a href="Dt.php">Daftar Tamu</a></td>
			<td><a href="form.html">Isi Biodata</a></td>
		</tr>
	</table>
</form>