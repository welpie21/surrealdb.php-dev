<?php

if(!isset($_POST["task"])) {
	header("Location: ../", true, 301);
	exit;
}

require_once "../../../vendor/autoload.php";
$config = require_once("../config.php");

use Surreal\Surreal;

$db = new Surreal();

$db->connect(
	$config["connection"]["host"], 
	$config["connection"]["target"]
);

$db->create("task", [
	"name" => $_POST["task"]
]);

header("Location: ../", true, 301);