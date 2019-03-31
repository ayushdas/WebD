<h2>Current DB listing:</h2>

<table>
	<tr>
		<th>Name</th><th>Diet</th>
	</tr>
	<?php foreach (($dbData?:[]) as $record): ?>
		<tr>
			<td><?= trim($record['name']) ?></td>
			<td><?= trim($record['diet']) ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<p><a href="<?= $BASE ?>/simpleform">Add another record</a></p>
<p><a href="<?= $BASE ?>/editView">Delete records</a></p>
