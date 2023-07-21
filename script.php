<?php
include "connection.php";
$start = 0;

$rows_per_page = 4;

$result = $mysqli->query("SELECT * FROM products LIMIT $start, $rows_per_page");
?>