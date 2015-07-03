				<div class="col-md-9">
					<h1 class="page-header">Tunggakan SP2<?php if ($nip) {echo ' <small>' . $this->pemeriksaan_model->namaPegawai($nip) . '</small>';} ?></h1>
					<table class="table table-bordered">
						<tr>
							<th style="text-align: center;">No.</th>
							<th style="text-align: center;">NPWP</th>
							<th style="text-align: center;">Masa</th>
							<th style="text-align: center;">Tahun</th>
							<th style="text-align: center;">Kode</th>
							<th colspan="3" style="text-align: center;">Tim Pemeriksa</th>
							<th style="text-align: center;">ALPP</th>
						</tr>
<?php $i = 1; ?>
<?php foreach ($tunggakan as $tgk): ?>
						<tr>
							<td style="text-align: right;"><?php if ($tgk['rik_lp2_no']) echo '<a href="/pemeriksaan/lp2/' . $tgk['rik_lp2_no'] . '">';?><?php echo $i++; ?><?php if($tgk['rik_lp2_no']) echo '</a>'; ?></td>
							<td><a href="/pemeriksaan/riwayat/<?php echo $tgk['rik_npwp']; ?>"><?php echo $tgk['rik_nama']; ?></a></td>
							<td style="text-align: center;"><?php echo substr($tgk['rik_ms1'], 0, 2) . '-' . substr($tgk['rik_ms2'], 0, 2); ?></td>
							<td style="text-align: center;"><?php echo '20' . substr($tgk['rik_ms1'], -2); ?></td>
							<td style="text-align: center;"><?php echo $tgk['rik_kode']; ?></td>
							<td style="text-align: center;"><?php if ($tgk['rik_tim_spv']): ?><a href="/pemeriksaan/tunggakan/<?php echo $tgk['rik_tim_s']; ?>"><?php echo $this->pemeriksaan_model->formatNama($tgk['rik_tim_spv']); ?></a><?php endif ?></td>
							<td style="text-align: center;"><?php if ($tgk['rik_tim_ket']): ?><a href="/pemeriksaan/tunggakan/<?php echo $tgk['rik_tim_k']; ?>"><?php echo $this->pemeriksaan_model->formatNama($tgk['rik_tim_ket']); ?></a><?php endif ?></td>
							<td style="text-align: center;"><?php if ($tgk['rik_tim_ag1']): ?><a href="/pemeriksaan/tunggakan/<?php echo $tgk['rik_tim_a1']; ?>"><?php echo $this->pemeriksaan_model->formatNama($tgk['rik_tim_ag1']); ?></a><?php endif ?></td>
							<td style="text-align: center;"><a href="http://10.254.4.54/ALPPedit.asp?ID_SIAP=<?php echo $tgk['rik_npwp'] . substr($tgk['rik_ms1'], 0, 2) . '20' . substr($tgk['rik_ms1'], 2, 2) . substr($tgk['rik_ms2'], 0, 2) . '20' . substr($tgk['rik_ms2'], 2, 2) . $tgk['rik_kode']; ?>"><span class="typcn typcn-link-outline"></span></a></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>