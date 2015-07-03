			<table class="table table-striped">
				<tr>
					<th>IP</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Jabatan</th>
				</tr>
			<?php foreach ($dropbox as $db_item): ?>
	<tr>
					<td><?php echo $db_item['peg_ip']; ?></td>
					<td><?php echo $db_item['peg_nip']; ?></td>
					<td><?php echo $db_item['peg_nama']; ?></td>
					<td><?php echo $db_item['peg_jab']; ?></td>
				</tr>
			<?php endforeach ?>
</table>