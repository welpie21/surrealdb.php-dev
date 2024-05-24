async function removeTask(event) {
	const id = event.target.dataset.id;

	const response = await fetch(`api/delete.php`, {
		method: 'POST',
		body: JSON.stringify({ id }),
		headers: {
			'Content-Type': "application/x-www-form-urlencoded"
		}
	});

	if (response.status !== 200) {
		throw new Error('Failed to delete todo');
	}

	event.target.closest('li').remove();
}

async function toggleTask(event) {

	event.target.disabled = true;

	const id = event.target.dataset.id;

	const response = await fetch(`api/toggle.php`, {
		method: 'POST',
		body: JSON.stringify({ id }),
		headers: {
			'Content-Type': "application/json;charset=utf-8"
		}
	});

	if (response.status !== 200) {
		throw new Error('Failed to toggle task');
	}

	const data = await response.json();

	if (data.done) {
		event.target.closest('li').classList.add('completed');
	} else {
		event.target.closest('li').classList.remove('completed');
	}

	event.target.disabled = false;
}

window.onload = function () {

	const checkboxes = document.querySelectorAll('input[type="checkbox"]');

	checkboxes.forEach(checkbox => {
		checkbox.addEventListener('change', toggleTask);
	});

	const deleteButtons = document.querySelectorAll('.delete-button');

	deleteButtons.forEach(button => {
		button.addEventListener('click', removeTask);
	});
};