<?php 

$host = 'localhost';
$username = 'root';
$password = '12345678';
$db = 'happy_db1';

$connection = new mysqli($host,$username,$password,$db);
// $connection->set_charset("tis620");
// $connection->query("SET collation_connection = tis620");
// $connection->query("SET NAMES tis620 COLLATE tis620_thai_ci");


?>