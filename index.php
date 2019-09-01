<?
    /** 
        *Database hostname    = localhost:3306
        *Database name        = crt_
        *Database username    = crtadm
        *Database password    = 32Z~tlt6
    */
?>
<html>
    <head>
    </head>
    <body>
    <!-- Test -->
    Hola!

<?php
$servername   = "localhost:3306";
$database = "crt_";
$username = "crtadm";
$password = "32Z~tlt6";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>
    </body>
</html>