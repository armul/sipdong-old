				<div class="col-md-9">
					<h1 class="page-header">Pemeriksaan Khusus</h1>
					<table class="table table-bordered">
						<tr>
							<th style="text-align: center;">NPWP</th>
							<th style="text-align: center;">Nama WP</th>
							<th style="text-align: center;">Masa</th>
							<th style="text-align: center;">Tahun</th>
							<th style="text-align: center;">Kode</th>
							<th style="text-align: center;">Data SKP</th>
						</tr>
<?php foreach ($riksus as $rik): ?>
						<tr>
							<td style="text-align: center;"><?php echo $this->pemeriksaan_model->formatNPWP($rik['rik_npwp']); ?></td>
							<td><?php echo $rik['rik_nama']; ?></td>
							<td style="text-align: center;"><?php echo substr($rik['rik_ms1'], 0, 2) . '-' . substr($rik['rik_ms2'], 0, 2); ?></td>
							<td style="text-align: center;"><?php echo '20' . substr($rik['rik_ms1'], -2); ?></td>
							<td style="text-align: center;"><?php echo $rik['rik_kode']; ?></td>
							<td style="text-align: center;"><a href="http://10.254.4.54/DBSKPlist.asp?showmaster=1&ID_SIAP=<?php echo $rik['rik_npwp'] . substr($rik['rik_ms1'], 0, 2) . '20' . substr($rik['rik_ms1'], 2, 2) . substr($rik['rik_ms2'], 0, 2) . '20' . substr($rik['rik_ms2'], 2, 2) . $rik['rik_kode']; ?>"><span class="typcn typcn-link-outline"></span></a></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>