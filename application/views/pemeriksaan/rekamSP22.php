				<div class="col-md-9">
					<h1 class="page-header"><i class="typcn typcn-document"></i> Rekam SP2</h1>
					<table class="table">
						<tr>
							<th>NP2</th>
							<th>Nama WP</th>
							<th>NPWP</th>
							<th>Kode</th>
							<th colspan="2">Masa</th>
						</tr>
<?php foreach ($calonSP2 as $clnSP2): ?>
						<tr>
							<td><a href="/pemeriksaan/lp2/<?php echo $clnSP2['rik_lp2_no']; ?>"><?php echo $this->pemeriksaan_model->formatNP2($clnSP2['rik_lp2_no']); ?></a></td>
							<td><?php echo $clnSP2['rik_nama']; ?></td>
							<td><?php echo $this->pemeriksaan_model->formatNPWP($clnSP2['rik_npwp']); ?></td>
							<td><?php echo $clnSP2['rik_kode']; ?></td>
							<td><?php echo $clnSP2['rik_ms1']; ?></td>
							<td><?php echo $clnSP2['rik_ms2']; ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>