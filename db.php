<?php


echo "dd";
//Database connection.

$con = MySQLi_connect("localhost","hmbwrbeuue","RS8j3wkFNv","hmbwrbeuue" );



//Check connection

if (MySQLi_connect_errno()) {

   echo "Failed to connect to MySQL: " . MySQLi_connect_error();

}

?>