<?php

require_once "../../vendor/autoload.php";
$config = require_once("./config.php");

use Surreal\Surreal;

$db_file = file_get_contents(__DIR__ . '/resources/setup.surql');

$db = new Surreal();

$db->connect(
	$config["connection"]["host"], 
	$config["connection"]["target"]
);

$db->import(
	$db_file,
	$config["authentication"]["username"],
	$config["authentication"]["password"]
);

// header("Location: ./index.php?success=true", true, 301);