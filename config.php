<?php
/**
	* Archivo de configración del sistema y la conexión con la base de datos.
	* Database hostname    = localhost:3306
	* Database name        = crt_
	* Database username    = crtadm
	* Database password    = 32Z~tlt6
*/
	$servername   = "localhost:3306";
	$database = "crt_";
	$username = "crtadm";
	$password = "32Z~tlt6";
	$conn = new mysqli($servername, $username, $password, $database);
	mysqli_set_charset( $conn, 'utf8' );


	// Probar conexión
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
	  echo "Connected successfully";
?>