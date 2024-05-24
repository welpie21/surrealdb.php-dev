<?php

require_once "../../vendor/autoload.php";
$config = require_once("./config.php");

use Surreal\Surreal;

$db = new Surreal();

$db->connect(
	$config["connection"]["host"],
	$config["connection"]["target"]
);

$tasks = $db->select("task");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="public/style.css">
	<script src="public/main.js"></script>
</head>

<body>
	<form class="add-form" action="./api/add.php" method="post">
		<input name="task" type="text" placeholder="Task name..." />
		<button class="submit-button" name="action" value="add">
			Add
		</button>
	</form>
	<ol>
		<?php foreach ($tasks as $task) : ?>
			<li class="task todo-card <?= $task["done"] ? "completed" : "" ?>">
				<input id="<?= $task["id"] ?>" type="checkbox" class="task-checkbox" name="done" <?= $task["done"] ? "checked" : "" ?> data-id="<?= $task["id"] ?>" />
				<label class="task-name" for="<?= $task["id"] ?>">
					<?= $task["name"] ?>
				</label>
				<button class="delete-button" name="action" value="delete" data-id="<?= $task["id"] ?>">
					X
				</button>
			</li>
		<?php endforeach; ?>
	</ol>
</body>

</html>