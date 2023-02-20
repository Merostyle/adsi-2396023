<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_atansiog = "localhost";
$database_atansiog = "atanasiog";
$username_atansiog = "root";
$password_atansiog = "";
$atansiog = mysql_pconnect($hostname_atansiog, $username_atansiog, $password_atansiog) or trigger_error(mysql_error(),E_USER_ERROR); 
?>