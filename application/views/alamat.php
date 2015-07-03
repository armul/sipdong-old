				<div class="col-md-9">
					<h1 class="page-header">Direktorat Jenderal Pajak</h1>
					<table class="table table-striped">
						<tr>
							<th>Kode</th>
							<th>Nama Unit Organisasi</th>
							<th>Alamat</th>
							<th>No. Telepon</th>
							<th>No. Faks</th>
						</tr>
<?php foreach ($organisasi as $org): ?>
						<tr>
							<td><?php echo $org['org_ktr']; ?></td>
							<td><?php echo $org['org_nama']; ?></td>
							<td><?php echo $org['org_alamat'] . ($org['org_kota'] ? ', ' : '') . $org['org_kota'] . ' ' . $org['org_kdpos']; ?></td>
							<td><?php echo $org['org_notelp'] ? '(' . $org['org_kdtelp'] . ') ' . $org['org_notelp'] : ''; ?></td>
							<td><?php echo $org['org_nofaks'] ? '(' . $org['org_kdtelp'] . ') ' . $org['org_nofaks'] : ''; ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>