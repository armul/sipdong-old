				<div class="col-md-9">
					<h1 class="page-header">Penyelesaian SP2<?php if ($nip) {echo ' <small>' . $this->sipdong_model->namaPegawai($nip) . '</small>';} ?></h1>
					<table class="table table-bordered">
						<tr>
							<th class="center">No.</th>
							<th class="center">Nama WP</th>
							<th class="center visible-print">Kode</th>
							<th class="center visible-print">Masa</th>
							<th class="center visible-print">Tahun</th>
							<th colspan="2" class="center">SP2</th>
							<th colspan="2" class="center">SPHP</th>
							<th colspan="2" class="center">LHP</th>
						</tr>
<?php $i = 1; ?>
<?php foreach ($penyelesaian as $sls): ?>
						<tr>
							<td style="text-align: right;"><?php if ($sls['rik_lp2_no']) echo '<a href="/pemeriksaan/lp2/' . $sls['rik_lp2_no'] . '">';?><?php echo $i++; ?><?php if($sls['rik_lp2_no']) echo '</a>'; ?></td>
							<td><a href="/pemeriksaan/riwayat/<?php echo $sls['rik_npwp']; ?>"><?php echo $sls['rik_nama']; ?></a></td>
							<td class="center visible-print"><?php echo $sls['rik_kode']; ?></td>
							<td class="center visible-print"><?php echo substr($sls['rik_ms1'], 0, 2) . '-' . substr($sls['rik_ms2'], 0, 2); ?></td>
							<td class="center visible-print"><?php echo '20' . substr($sls['rik_ms1'], -2); ?></td>
							<td class="right"><?php echo $sls['rik_sp2_no']; ?></td>
							<td><?php echo $this->sipdong_model->formatTanggal($sls['rik_sp2_tgl']); ?></td>
							<td class="right"><?php echo $sls['rik_sphp_no']; ?></td>
							<td><?php echo $this->sipdong_model->formatTanggal($sls['rik_sphp_tgl']); ?></td>
							<td class="right"><?php echo $sls['rik_lhp_no']; ?></td>
							<td><?php echo $this->sipdong_model->formatTanggal($sls['rik_lhp_tgl']); ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>