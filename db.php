<?php



//Database connection.

$con = MySQLi_connect(

   "localhost", //Server host name.

   "hmbwrbeuue", //Database username.

   "RS8j3wkFNv", //Database password.

   "hmbwrbeuue" //Database name or anything you would like to call it.

);



//Check connection

if (MySQLi_connect_errno()) {

   echo "Failed to connect to MySQL: " . MySQLi_connect_error();

}

?>