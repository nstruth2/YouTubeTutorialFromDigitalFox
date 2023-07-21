<?php
include "connection.php";
if($mysqli->connect_errno != 0){

	echo $mysqli->connect_error;
	exit();
}
$start = 0;

$rows_per_page = 4;

$result = $mysqli->query("SELECT * FROM products LIMIT $start, $rows_per_page");
?>