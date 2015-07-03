				<div class="col-md-9">
					<h1 class="page-header">Pengawasan Restitusi</h1>
					<table class="table">
						<tr>
							<th style="text-align: center;" colspan="2">Nama Wajib Pajak</th>
							<th style="text-align: center;">Jenis Pajak</th>
							<th colspan="2" style="text-align: center;">Masa Pajak</th>
							<th style="text-align: center;">Nilai SPT</th>
							<th style="text-align: center;">JT SKP</th>
							<th style="text-align: center;" class="hidden-print">LP2</th>
						</tr>
<?php foreach ($restitusi as $res): ?>
						<tr>
							<td><span class="badge"><?php echo $res['rik_npwp']; ?></span></td>
							<td><?php echo $res['rik_nama']; ?></td>
							<td style="text-align: center;"><?php echo $res['rik_kode'] == '2182' ? 'PPN' : ($res['rik_kode'] == '4182' ? 'PPh' : ''); ?></td>
							<td style="text-align: center;"><?php echo $res['rik_ms1']; ?></td>
							<td style="text-align: center;"><?php echo $res['rik_ms2']; ?></td>
							<td style="text-align: right;"><?php echo number_format($res['rik_prognosa']); ?></td>
							<td style="text-align: center;"><?php echo $res['rik_jtp_tgl']; ?></td>
							<td style="text-align: center;" class="hidden-print"><?php echo $res['rik_lp2_no'] ? '<a href="lp2/' . $res['rik_lp2_no'] . '"><i class="typcn typcn-clipboard"></i></a>' : ''; ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>