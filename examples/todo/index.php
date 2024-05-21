<?php

require_once "../../vendor/autoload.php";

use Surreal\Surreal;

$db = new Surreal();
$db->connect("http://localhost:8000", [
	"namespace" => "example",
	"database" => "todo"
]);

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
	<form class="add-form" action="./api/handle.php" method="post">
		<input name="task" type="text" />
		<button class="submit-button" name="action" value="add">
			Add
		</button>
	</form>
	<form action="./api/handle.php" method="post"></form>
	<ol>
		<?php foreach ($tasks as $task) : ?>
			<li class="task">
				<?= $task['name'] ?>
				<form action="./api/handle.php" method="post">
					<input type="hidden" name="task" value="<?= $task['id'] ?>" />
					<button class="delete-button" name="action" value="delete">
						x
					</button>
				</form>
			</li>
		<?php endforeach; ?>
	</ol>
</body>

</html>