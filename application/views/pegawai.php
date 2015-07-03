				<div class="col-md-9">
					<h1 class="page-header">Pegawai <?php echo $kantor; ?></h1>
					<table class="table table-bordered">
						<tr>
							<th>Nama</th>
							<th>NIP</th>
							<th>Unit Organisasi</th>
						</tr>
<?php foreach ($pegawai as $peg): ?>
						<tr style="background-color: <?php switch ($peg['peg_es4']) { case '01': echo '#1abc9c'; break; case '02': echo '#2ecc71'; break; case '03': echo '#3498db'; break; case '04': echo '#9b59b6'; break; case '05': echo '#34495e'; break; case '06': echo '#f1c40f'; break;} ?>;">
							<td><span class="badge"><?php echo $peg['peg_ip']; ?></span><?php echo ucwords(strtolower($peg['peg_nama'])); ?></td>
							<td><span class="badge"><?php echo $peg['peg_nip']; ?></span></td>
							<td><?php echo $this->pegawai_model->cari_organisasi($peg['peg_es2'], $peg['peg_es3'], $peg['peg_es4'], $peg['peg_kjf']); ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>