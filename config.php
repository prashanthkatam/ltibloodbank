<?php

session_start();

$host = "mysqldb2022.cwnlfqr4s8uu.us-west-2.rds.amazonaws.com"; /* Host name */
$user = "admin"; /* User */
$password = "admin123"; /* Password */
$dbname = "customers"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
