<?php
$mysqli = new mysqli('', '', '', '');
if($mysqli->connect_errno != 0){

	echo $mysqli->connect_error;
	exit();
}
?>