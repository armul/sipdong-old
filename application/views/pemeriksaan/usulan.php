				<div class="col-md-9">
					<h1 class="page-header">Daftar Nominatif Wajib Pajak yang Diusulkan Pemeriksaan</h1>
					<table class="table table-bordered">
						<tr>
							<th style="text-align: center;">No. Surat</th>
							<th style="text-align: center;">Tgl.</th>
							<th style="text-align: center;">Jumlah</th>
						</tr>
<?php foreach ($usulan as $usl): ?>
						<tr>
							<td><a href="/pemeriksaan/usulan/<?php echo str_replace('/', '', $usl['rik_usl_no']); ?>"><?php echo $usl['rik_usl_no']; ?></a></td>
							<td style="text-align: center;"><?php echo $this->pemeriksaan_model->formatTanggal($usl['rik_usl_tgl']); ?></td>
							<td style="text-align: right;"><?php echo $usl['jumlah']; ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>