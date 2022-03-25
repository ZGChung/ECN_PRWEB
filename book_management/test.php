<?php

$data = array();

$data["method"] = $_SERVER["REQUEST_METHOD"];

foreach ($_GET as $key => $aData) {
	$data[$key] = $aData;
}

foreach ($_POST as $key => $aData) {
	$data[$key] = $aData;
}

header('Content-Type: application/json');
print json_encode($data);
?>

