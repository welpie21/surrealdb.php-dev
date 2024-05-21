<?php

require_once "../../../vendor/autoload.php";

use Surreal\Cbor\Types\RecordId;
use Surreal\Cbor\Types\StringRecordId;
use Surreal\Surreal;

$db = new Surreal();
$db->connect("http://localhost:8000", [
	"namespace" => "example",
	"database" => "todo"
]);

$action = isset($_POST['action']) ? $_POST['action'] : null;
$task = isset($_POST['task']) ? $_POST['task'] : null;

if(!$action) {
	header("Location: /surrealdb.php-dev/examples/todo?error=1");
	exit;
}

if(!$task) {
	header("Location: /surrealdb.php-dev/examples/todo?error=2");
	exit;
}

switch($action) {
	case "add":
		$db->create("task", [
			"name" => $task
		]);
		break;
	case "delete":
		$db->delete(new RecordId("task", "6wfxq67hit9ny2kfmceb"));
		break;
}

var_dump($_POST);

// header("Location: /surrealdb.php-dev/examples/todo?success");