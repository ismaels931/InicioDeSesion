<?php
	$servername = 'localhost';
	$username = 'root';
	$pwd = '';
	$dbname = 'Usuarios';

	$conn = mysqli_connect($servername, $username, $pwd, $dbname);

	$sql = 'select * from users';
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	if ($row['nombre'] == $_POST['nombre'] and $row['pwd'] == $_POST['contraseña']) print('Bienvenido');
	else print('Acceso denegado');
?>
