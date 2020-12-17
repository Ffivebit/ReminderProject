<?php

	if(!defined("APP")) die();

	requireLogin();

	$reminders = remindersAll(user()->ID);
 	
 	require "header.php";

 ?>

	<h1 class="font-weight-light text-primary text-center mb-4">Reminders</h1>

	<table class="table table-hover">
		<thead>
			<th class="border-top-0">Title</th>
			<th class="border-top-0">Text</th>
			<th class="border-top-0">Added</th>
			<th class="border-top-0">End Date</th>
			<th class="border-top-0"></th>
		</thead>
		<tbody>
			<?php foreach($reminders as $reminder): ?>
				<tr>
					<td class="align-middle"><?php echox($reminder->Title); ?></td>
					<td class="align-middle"><?php echox($reminder->Text); ?></td>
					<td class="align-middle"><?php echox($reminder->Added); ?></td>
					<td class="align-middle"><?php echox($reminder->EndDate); ?></td>
					
					<td>
						<form action="delete" method="POST">
							<button type="submit" name="id" title="Delete" class="btn btn-sm btn-danger" value="<?php echox($reminder->ID); ?>">Delete</button>
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php require "footer.php"; ?>