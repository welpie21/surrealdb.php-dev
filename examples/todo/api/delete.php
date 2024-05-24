<?php


if(!isset($_POST)) {
	header("Location: ../", true, 301);
	exit;
}

$data = file_get_contents("php://input");
$data = json_decode($data, true);

require_once "../../../vendor/autoload.php";
$config = require_once("../config.php");

use Surreal\Cbor\Types\StringRecordId;
use Surreal\Surreal;

$db = new Surreal();

$db->connect(
	$config["connection"]["host"], 
	$config["connection"]["target"]
);

$record = StringRecordId::create($data["id"]);
$record = $db->delete($record);

header("Content-Type: application/json");

echo json_encode([
	"removed" => $record
]);