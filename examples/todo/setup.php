<?php

require_once "../../vendor/autoload.php";

use Surreal\Surreal;

$db_file = file_get_contents(__DIR__ . '/resources/setup.surql');

$db = new Surreal();

$db->connect("http://localhost:8000", [
	"namespace" => "example",
	"database" => "todo"
]);

$db->import($db_file, "root", "root");