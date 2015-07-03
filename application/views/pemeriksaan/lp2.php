<?php
	$spv = array('060094698', '060104312', '060089048');
	$ket = array('060101412', '060107008', '060098620', '060101502', '060094728', '060107013');
	$agt = array('060108086', '060111336', '060112878', '060114469', '060111054', '060112055', '820006291');
	/*$tim[0] = array(
		array('060101412', '060108086'),
		array('060107008', '060111336')
	);
	$tim[1] = array(
		array('060098620', '060112878'),
		array('060101502', '060114469')
	);
	$tim[2] = array(
		array('060094728', '060111054'),
		array('060107013', '060112055', '820006291')
	);*/
	$supervisor = $ketua = $anggota = "<option value=\"\">(tidak ada)</option>\n";
	foreach ($spv as $spvip) {
		$supervisor .= "\t\t\t\t\t\t\t\t\t\t" . '<option value="' . $spvip . '">' . $this->pemeriksaan_model->namaPegawai($spvip) . "</option>\n";
	}
	foreach ($ket as $ketip) {
		$ketua .= "\t\t\t\t\t\t\t\t\t\t" . '<option value="' . $ketip . '">' . $this->pemeriksaan_model->namaPegawai($ketip) . "</option>\n";
	}
	foreach ($agt as $agtip) {
		$anggota .= "\t\t\t\t\t\t\t\t\t\t" . '<option value="' . $agtip . '">' . $this->pemeriksaan_model->namaPegawai($agtip) . "</option>\n";
	}
?>
				<div class="col-md-9">
					<h1 class="page-header">Lembar Penugasan Pemeriksaan <small><?php echo $this->pemeriksaan_model->formatNP2($pemeriksaan->rik_lp2_no); ?></small></h1>
					<form role="form" method="post" action="<?php echo '/' . uri_string(); ?>">
						<h2>Ikhtisar Pemeriksaan <a class="pull-right" title="ALPP" href="http://10.254.4.54/ALPPedit.asp?ID_SIAP=<?php echo $pemeriksaan->rik_npwp . substr($pemeriksaan->rik_ms1, 0, 2) . '20' . substr($pemeriksaan->rik_ms1, 2, 2) . substr($pemeriksaan->rik_ms2, 0, 2) . '20' . substr($pemeriksaan->rik_ms2, 2, 2) . $pemeriksaan->rik_kode; ?>"><span class="typcn typcn-link-outline"></span></a></h2>
						<table class="table table-bordered">
							<tr>
								<th>Nama Wajib Pajak</th>
								<td><span class="badge"><?php echo $this->pemeriksaan_model->formatNPWP($pemeriksaan->rik_npwp); ?></span><?php echo $pemeriksaan->rik_nama; ?></td>
							</tr>
							<tr>
								<th>Alamat Wajib Pajak</th>
								<td><?php echo $pemeriksaan->rik_almt; ?></td>
							</tr>
							<tr>
								<th>Masa/Tahun Pajak</th>
								<td>
									<div class="btn-group">
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 1 && substr($pemeriksaan->rik_ms2, 0, 2) >= 1 ? 'primary' : 'default'; ?>">01</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 2 && substr($pemeriksaan->rik_ms2, 0, 2) >= 2 ? 'primary' : 'default'; ?>">02</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 3 && substr($pemeriksaan->rik_ms2, 0, 2) >= 3 ? 'primary' : 'default'; ?>">03</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 4 && substr($pemeriksaan->rik_ms2, 0, 2) >= 4 ? 'primary' : 'default'; ?>">04</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 5 && substr($pemeriksaan->rik_ms2, 0, 2) >= 5 ? 'primary' : 'default'; ?>">05</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 6 && substr($pemeriksaan->rik_ms2, 0, 2) >= 6 ? 'primary' : 'default'; ?>">06</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 7 && substr($pemeriksaan->rik_ms2, 0, 2) >= 7 ? 'primary' : 'default'; ?>">07</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 8 && substr($pemeriksaan->rik_ms2, 0, 2) >= 8 ? 'primary' : 'default'; ?>">08</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 9 && substr($pemeriksaan->rik_ms2, 0, 2) >= 9 ? 'primary' : 'default'; ?>">09</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 10 && substr($pemeriksaan->rik_ms2, 0, 2) >= 10 ? 'primary' : 'default'; ?>">10</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 11 && substr($pemeriksaan->rik_ms2, 0, 2) >= 11 ? 'primary' : 'default'; ?>">11</span>
										<span class="btn btn-<?php echo substr($pemeriksaan->rik_ms1, 0, 2) <= 12 && substr($pemeriksaan->rik_ms2, 0, 2) >= 12 ? 'primary' : 'default'; ?>">12</span>
									</div>
									<span class="btn btn-primary"><?php echo '20' . substr($pemeriksaan->rik_ms1, -2); ?></span>
								</td>
							</tr>
							<tr>
								<th>Kode Pemeriksaan</th>
								<td>
									<span class="badge"><?php echo $pemeriksaan->rik_kode; ?></span>
									<span><?php echo $this->pemeriksaan_model->jenisPemeriksaan($pemeriksaan->rik_kode); ?></span>
<?php if ($pemeriksaan->rik_prognosa): ?>
									<span class="pull-right"><?php echo number_format($pemeriksaan->rik_prognosa) . ' @ ' . $this->pemeriksaan_model->formatTanggal($pemeriksaan->rik_jtp_tgl); ?></span>
<?php endif ?>
								</td>
							</tr>
						</table>
<?php if ($pemeriksaan->rik_usl_no): ?>
						<h2>Usulan Pemeriksaan</h2>
						<table class="table table-bordered">
							<tr>
								<th>Nomor</th>
								<td><?php echo $pemeriksaan->rik_usl_no; ?></td>
							</tr>
							<tr>
								<th>Tanggal</th>
								<td><?php echo $this->pemeriksaan_model->formatTanggal($pemeriksaan->rik_usl_tgl); ?></td>
							</tr>
						</table>
<?php endif ?>
<?php if ($pemeriksaan->rik_ins_no): ?>
						<h2><?php echo substr($pemeriksaan->rik_kode, 0, 1) == '6' ? 'Permintaan Pemeriksaan Lokasi' : 'Penugasan Pemeriksaan'; ?></h2>
						<table class="table table-bordered">
							<tr>
								<th>Nomor</th>
								<td><?php echo $pemeriksaan->rik_ins_no; ?></td>
							</tr>
							<tr>
								<th>Tanggal</th>
								<td><?php echo $this->pemeriksaan_model->formatTanggal($pemeriksaan->rik_ins_tgl); ?></td>
							</tr>
						</table>
<?php endif ?>
						<h2>Surat Perintah Pemeriksaan <a class="btn btn-primary pull-right" href="/pemeriksaan/sp2/<?php echo ($pemeriksaan->rik_sp2_buku == 'R' ? 'riksis' : ($pemeriksaan->rik_sp2_buku == 'M' ? 'manual' : '')) . '/' . substr($pemeriksaan->rik_sp2_tgl, 0, 4) . '/' . $pemeriksaan->rik_sp2_no ?>"><i class="typcn typcn-printer"></i>Cetak</a></h2>
						<table class="table table-bordered">
							<tr>
								<th>Nomor</th>
								<td><?php
	if ($pemeriksaan->rik_sp2_no) {
		echo '<i class="typcn typcn-document"></i>PRIN-' . str_pad($pemeriksaan->rik_sp2_no, 5, "0", STR_PAD_LEFT) . '/WPJ.27/KP.0105' . ($pemeriksaan->rik_sp2_buku == 'R' ? '/RIK.SIS/' : '/') . substr($pemeriksaan->rik_sp2_tgl, 0, 4);
	} else {
		echo '<input type="text" class="form-control" name="sp2_no" placeholder="123">';
	}
	?></td>
							</tr>
							<tr>
								<th>Tanggal</th>
								<td><?php
	if ($pemeriksaan->rik_sp2_tgl) {
		echo '<i class="typcn typcn-calendar"></i>' . $this->pemeriksaan_model->formatTanggal($pemeriksaan->rik_sp2_tgl);
	} else {
		echo '<input type="date" class="form-control" name="sp2_tgl" placeholder="DD/MM/YYYY">';
	}
	?></td>
							</tr>
							<tr>
								<th>Supervisor</th>
<?php if ($pemeriksaan->rik_tim_spv): ?>
								<td>
									<i class="typcn typcn-user"></i><span class="badge"><?php echo $pemeriksaan->rik_tim_spv; ?></span><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($pemeriksaan->rik_tim_spv); ?></span><span><?php echo $this->pemeriksaan_model->namaPegawai($pemeriksaan->rik_tim_spv); ?></span>
								</td>
<?php else: ?>
								<td><?php echo "\n\t\t\t\t\t\t\t\t\t" . '<select class="form-control" name="tim_spv"' . ($pemeriksaan->rik_sp2_no ? ' disabled="disabled"' : '') . '>' . $supervisor . "\n\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t"; ?></td>
<?php endif ?>
							</tr>
							<tr>
								<th>Ketua</th>
<?php if ($pemeriksaan->rik_tim_ket): ?>
								<td>
									<i class="typcn typcn-user"></i><span class="badge"><?php echo $pemeriksaan->rik_tim_ket; ?></span><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($pemeriksaan->rik_tim_ket); ?></span><span><?php echo $this->pemeriksaan_model->namaPegawai($pemeriksaan->rik_tim_ket); ?></span>
								</td>
<?php else: ?>
								<td><?php echo "\n\t\t\t\t\t\t\t\t\t" . '<select class="form-control" name="tim_ket"' . ($pemeriksaan->rik_sp2_no ? ' disabled="disabled"' : '') . '>' . $ketua . "\n\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t"; ?></td>
<?php endif ?>
							</tr>
							<tr>
								<th rowspan="<?php // echo $pemeriksaan->rik_tim_ag3 ? '3' : $pemeriksaan->rik_tim_ag2 ? '2' : '1'; ?>3">Anggota</th>
<?php if ($pemeriksaan->rik_tim_ag1): ?>
								<td>
									<i class="typcn typcn-user"></i><span class="badge"><?php echo $pemeriksaan->rik_tim_ag1; ?></span><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($pemeriksaan->rik_tim_ag1); ?></span><span><?php echo $this->pemeriksaan_model->namaPegawai($pemeriksaan->rik_tim_ag1); ?></span>
								</td>
<?php else: ?>
								<td><?php echo "\n\t\t\t\t\t\t\t\t\t" . '<select class="form-control" name="tim_ag1"' . ($pemeriksaan->rik_sp2_no ? ' disabled="disabled"' : '') . '>' . $anggota . "\n\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t"; ?></td>
<?php endif ?>
							</tr>
<?php if ($pemeriksaan->rik_tim_ag2): ?>
							<tr>
								<td>
									<i class="typcn typcn-user"></i><span class="badge"><?php echo $pemeriksaan->rik_tim_ag2; ?></span><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($pemeriksaan->rik_tim_ag2); ?></span><span><?php echo $this->pemeriksaan_model->namaPegawai($pemeriksaan->rik_tim_ag2); ?></span>
								</td>
							</tr>
<?php else: ?>
							<tr>
								<td>
									<select class="form-control" name="tim_ag2"<?php echo ($pemeriksaan->rik_sp2_no ? ' disabled="disabled"' : '');?>>
										<?php echo $anggota; ?>
									</select>
								</td>
							</tr>
<?php endif ?>
<?php if ($pemeriksaan->rik_tim_ag3): ?>
							<tr>
								<td>
									<i class="typcn typcn-user"></i><span class="badge"><?php echo $pemeriksaan->rik_tim_ag3; ?></span><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($pemeriksaan->rik_tim_ag3); ?></span><span><?php echo $this->pemeriksaan_model->namaPegawai($pemeriksaan->rik_tim_ag3); ?></span>
								</td>
							</tr>
<?php else: ?>
							<tr>
								<td>
									<select class="form-control" name="tim_ag3"<?php echo ($pemeriksaan->rik_sp2_no ? ' disabled="disabled"' : '');?>>
										<?php echo $anggota; ?>
									</select>
								</td>
							</tr>
<?php endif ?>
						</table>
<?php if ($sp2p): ?>
						<h2>Surat Perintah Pemeriksaan Perubahan</h2>
						<table class="table table-bordered">
							<tr>
								<th>Nomor</th>
								<th>Tanggal</th>
								<th>Tim Pengganti</th>
							</tr>
<?php foreach ($sp2p as $per): ?>
							<tr>
								<td rowspan="<?php echo $per['sp2p_tim_ag3'] ? '5' : $per['sp2p_tim_ag2'] ? '4' : '3'; ?>"><?php echo '<i class="typcn typcn-document"></i>PRIN-P-' . str_pad($per['sp2p_no'], 5, "0", STR_PAD_LEFT) . '/WPJ.27/KP.0105' . ($per['sp2p_buku'] == 'R' ? '/RIK.SIS/' : '/') . substr($per['sp2p_tgl'], 0, 4); ?></td>
								<td rowspan="<?php echo $per['sp2p_tim_ag3'] ? '5' : $per['sp2p_tim_ag2'] ? '4' : '3'; ?>"><i class="typcn typcn-calendar"></i><?php echo $this->pemeriksaan_model->formatTanggal($per['sp2p_tgl']); ?></td>
								<td><i class="typcn typcn-user"></i><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($per['sp2p_tim_spv']); ?></span><?php echo $this->pemeriksaan_model->namaPegawai($per['sp2p_tim_spv']); ?></td>
							</tr>
							<tr>
								<td><i class="typcn typcn-user"></i><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($per['sp2p_tim_ket']); ?></span><?php echo $this->pemeriksaan_model->namaPegawai($per['sp2p_tim_ket']); ?></td>
							</tr>
							<tr>
								<td><i class="typcn typcn-user"></i><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($per['sp2p_tim_ag1']); ?></span><?php echo $this->pemeriksaan_model->namaPegawai($per['sp2p_tim_ag1']); ?></td>
							</tr>
<?php if ($per['sp2p_tim_ag2']): ?>
							<tr>
								<td><i class="typcn typcn-user"></i><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($per['sp2p_tim_ag2']); ?></span><?php echo $this->pemeriksaan_model->namaPegawai($per['sp2p_tim_ag2']); ?></td>
							</tr>
<?php endif ?>
<?php if ($per['sp2p_tim_ag3']): ?>
							<tr>
								<td><i class="typcn typcn-user"></i><span class="badge"><?php echo $this->pemeriksaan_model->nipPegawai($per['sp2p_tim_ag3']); ?></span><?php echo $this->pemeriksaan_model->namaPegawai($per['sp2p_tim_ag3']); ?></td>
							</tr>
<?php endif ?>
<?php endforeach ?>
						</table>
<?php endif ?>
<?php if ($pemeriksaan->rik_sbatal_no): ?>
						<h2>Surat Pembatalan</h2>
						<table class="table table-bordered">
							<tr>
								<th>Nomor</th>
								<td><i class="typcn typcn-document"></i><?php echo $pemeriksaan->rik_sbatal_no; ?></td>
							</tr>
							<tr>
								<th>Tanggal</th>
								<td><i class="typcn typcn-calendar"></i><?php echo $this->pemeriksaan_model->formatTanggal($pemeriksaan->rik_sbatal_tgl); ?></td>
							</tr>
						</table>
<?php else: ?>
						<h2>Surat Pemberitahuan Hasil Pemeriksaan</h2>
						<table class="table table-bordered">
							<tr>
								<th>Nomor</th>
								<td><?php
	if ($pemeriksaan->rik_sphp_no) {
		echo '<i class="typcn typcn-document"></i>SPHP-' . str_pad($pemeriksaan->rik_sphp_no, 5, "0", STR_PAD_LEFT) . '/WPJ.27/KP.0105' . ($pemeriksaan->rik_sphp_buku == 'R' ? '/RIK.SIS/' : '/') . substr($pemeriksaan->rik_sphp_tgl, 0, 4);
	} else {
		echo '<input type="text" class="form-control" name="sphp_no" placeholder="123">';
	}
	?></td>
							</tr>
							<tr>
								<th>Tanggal</th>
								<td><?php
	if ($pemeriksaan->rik_sphp_tgl) {
		echo '<i class="typcn typcn-calendar"></i>' . $this->pemeriksaan_model->formatTanggal($pemeriksaan->rik_sphp_tgl);
	} else {
		echo '<input type="date" class="form-control" name="sphp_tgl" placeholder="DD/MM/YYYY">';
	}
	?></td>
							</tr>
						</table>
						<h2>Laporan Hasil Pemeriksaan</h2>
						<table class="table table-bordered">
							<tr>
								<th>Nomor</th>
								<td><?php
	if ($pemeriksaan->rik_lhp_no) {
		echo '<i class="typcn typcn-document"></i>LAP-' . str_pad($pemeriksaan->rik_lhp_no, 5, "0", STR_PAD_LEFT) . '/WPJ.27/KP.0105' . ($pemeriksaan->rik_lhp_buku == 'R' ? '/RIK.SIS/' : '/') . substr($pemeriksaan->rik_lhp_tgl, 0, 4);
	} else {
		echo '<input type="text" class="form-control" name="lhp_no" placeholder="123">';
	}
	?></td>
							</tr>
							<tr>
								<th>Tanggal</th>
								<td><?php
	if ($pemeriksaan->rik_lhp_tgl) {
		echo '<i class="typcn typcn-calendar"></i>' . $this->pemeriksaan_model->formatTanggal($pemeriksaan->rik_lhp_tgl);
	} else {
		echo '<input type="date" class="form-control" name="lhp_tgl" placeholder="DD/MM/YYYY">';
	}
	?></td>
							</tr>
						</table>
<?php if ($skp): ?>
						<h2>Surat Ketetapan Pajak</h2>
						<table class="table table-bordered">
							<tr>
								<th style="text-align: center;">Nomor</th>
								<th style="text-align: center;">Tanggal</th>
								<th style="text-align: center;">Nilai</th>
								<th style="text-align: center;" colspan="2">Masa Pajak</th>
							</tr>
<?php foreach ($skp as $tap): ?>
							<tr>
								<td><?php echo $tap['skp_no']; ?></td>
								<td style="text-align: center;"><?php echo $this->pemeriksaan_model->formatTanggal($tap['skp_tgl']); ?></td>
								<td style="text-align: right;"><?php echo number_format($tap['skp_nilai']); ?></td>
								<td style="text-align: center;"><?php echo $tap['skp_ms1']; ?></td>
								<td style="text-align: center;"><?php echo $tap['skp_ms2']; ?></td>
							</tr>
<?php endforeach ?>
						</table>
<?php endif ?>
<?php endif ?>
						<hr>
						<div class="text-center">
							<div class="btn-group">
								<a class="btn btn-default" href="#"><i class="typcn typcn-time"></i>Perpanjangan</a>
								<a class="btn btn-default" href="#"><i class="typcn typcn-edit"></i>Perubahan</a>
<?php if (!$pemeriksaan->rik_sbatal_no): ?>
								<a class="btn btn-default" href="#"><i class="typcn typcn-delete"></i>Pembatalan</a>
<?php endif ?>
<?php //if (!$pemeriksaan->rik_salih_no): ?>
								<a class="btn btn-default" href="#"><i class="typcn typcn-arrow-forward"></i>Pengalihan</a>
<?php //endif ?>
							</div>
							<button class="btn btn-primary" name="simpan">Simpan</button>
						</div>
					</form>
				</div>