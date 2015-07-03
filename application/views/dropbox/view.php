			<table class="table table-striped">
				<tr>
					<th>No. Tanda Terima</th>
					<th>NPWP</th>
					<th>Nama WP</th>
					<th>Status SPT</th>
				</tr>
			<?php foreach ($dropbox as $db_item): ?>
	<tr>
					<td><a href="lihat/331-<?php echo $db_item['db_kdun']; ?>-<?php echo str_pad($db_item['db_nott'], 8, '0', STR_PAD_LEFT); ?>">331-<?php echo $db_item['db_kdun']; ?>-<?php echo str_pad($db_item['db_nott'], 8, '0', STR_PAD_LEFT); ?></a></td>
					<td><?php echo $db_item['db_npwp']; ?></td>
					<td><?php echo $db_item['db_nama']; ?></td>
					<td><?php echo $db_item['db_status']; ?></td>
				</tr>
			<?php endforeach ?>
</table>