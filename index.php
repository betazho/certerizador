<?
    /** 
        *Database hostname    = localhost:3306
        *Database name        = crt_
        *Database username    = crtadm
        *Database password    = 32Z~tlt6
    */
?>
<html>
<? 
mysql_connect('localhost:3306', 'crtadm', '32Z~tlt6') or die('Could not connect the database : Username or password incorrect');
mysql_select_db('crt_') or die ('No database found');
echo 'Database Connected successfully';

?>
    <head>
    </head>
    <body>
    <!-- Test -->
    </body>
</html>