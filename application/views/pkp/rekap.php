				<div class="col-md-9">
					<table class="table">
						<tr>
							<th>Nama Pegawai</th>
							<th>Jumlah Nilai dari Rekan</th>
							<th>Nilai dari Atasan</th>
						</tr>
<?php foreach ($rekapitulasi as $rekap): ?>
						<tr>
							<td><?php echo ucwords(strtolower($this->penghargaan_model->lihat_nama($rekap['pegawai'])->nama)); ?></th>
							<td><?php echo $rekap['rekan']; ?></td>
							<td><?php echo $rekap['atasan']; ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>