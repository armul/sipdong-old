			<table class="table">
				<tr>
					<th>Nomor</th>
					<td>331-<?php echo $dropbox[0]['db_kdun']; ?>-<?php echo str_pad($dropbox[0]['db_nott'], 8, '0', STR_PAD_LEFT); ?></td>
				</tr>
				<tr>
					<th>NPWP</th>
					<td><?php echo $dropbox[0]['db_npwp']; ?></td>
				</tr>
				<tr>
					<th>STATUS SPT</th>
					<td><?php echo $dropbox[0]['db_status']; ?></td>
				</tr>
				<tr>
					<th>TAHUN PAJAK</th>
					<td><?php echo $dropbox[0]['db_thpj']; ?></td>
				</tr>
			</table>
			<p>Jambi, <?php echo $dropbox[0]['db_tgtt']; ?></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p><?php echo $petugas[0]['peg_nama']; ?></p>
			<p>NIP <?php echo $petugas[0]['peg_nip']; ?></p>