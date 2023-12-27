<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cjh_leisure_db";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$connection=new PDO($dsn, $username, $password, $options);
date_default_timezone_set("Asia/Manila");
?>