			<table class="table table-striped">
				<tr>
					<th>No. Tanda Terima</th>
					<th>NPWP</th>
					<th>Nama WP</th>
					<th>Status SPT</th>
				</tr>
<?php if (isset($dropbox)): ?>
<?php foreach ($dropbox as $db_item): ?>
	<tr>
					<td>331-<?php echo $db_item['db_kdun']; ?>-<?php echo $db_item['db_nott']; ?></td>
					<td><?php echo $db_item['db_npwp']; ?></td>
					<td><?php echo $db_item['db_nama']; ?></td>
					<td><?php echo $db_item['db_status']; ?></td>
				</tr>
<?php endforeach ?>
<?php endif ?>
			</table>