				<div class="col-md-9">
					<h1 class="page-header"><?php echo $usulan[0]['rik_usl_no']; ?></h1>
					<h3><?php echo $this->pemeriksaan_model->formatTanggal($usulan[0]['rik_usl_tgl']); ?></h3>
					<table class="table">
						<tr>
							<th style="text-align: center;" colspan="2">Nama Wajib Pajak</th>
							<th style="text-align: center;">Kode</th>
							<th style="text-align: center;" colspan="2">Masa/Tahun Pajak</th>
							<th style="text-align: center;">LP2</th>
							<th style="text-align: center;">ALPP</th>
						</tr>
<?php foreach ($usulan as $usl): ?>
						<tr>
							<td><span class="badge"><?php echo $usl['rik_npwp']; ?></span></td>
							<td><?php echo $usl['rik_nama']; ?></td>
							<td style="text-align: center;"><?php echo $usl['rik_kode']; ?></td>
							<td style="text-align: center;"><?php echo $usl['rik_ms1']; ?></td>
							<td style="text-align: center;"><?php echo $usl['rik_ms2']; ?></td>
							<td style="text-align: center;" class="hidden-print"><a href="/pemeriksaan/lp2/<?php echo $usl['rik_lp2_no']; ?>"><span class="typcn typcn-clipboard"></span></a></td>
							<td style="text-align: center;" class="hidden-print"><a href="http://10.254.4.54/ALPPedit.asp?ID_SIAP=<?php echo $usl['rik_npwp'] . substr($usl['rik_ms1'], 0, 2) . '20' . substr($usl['rik_ms1'], 2, 2) . substr($usl['rik_ms2'], 0, 2) . '20' . substr($usl['rik_ms2'], 2, 2) . $usl['rik_kode']; ?>"><span class="typcn typcn-link-outline"></span></a></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>