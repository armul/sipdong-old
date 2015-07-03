				<div class="col-md-9">
					<h1 class="page-header">Rekam ND</h1>
					<h2>Beban SP2</h2>
					<table class="table table-bordered">
						<tr>
							<th>Supervisor</th>
							<th>LB PPN Komp</th>
							<th>LB PPN Rest</th>
							<th>LB PPh Single</th>
							<th>LB PPh All</th>
							<th>Penghapusan</th>
							<th>Khusus</th>
							<th>Tujuan Lain</th>
							<th>Lokasi</th>
						</tr>
<?php foreach ($bebanSP2 as $bbnSP2): ?>
						<tr>
							<td><?php echo $this->pemeriksaan_model->namaPegawai($bbnSP2['supervisor']); ?></td>
							<td><?php echo $bbnSP2['ppnkomp']; ?></td>
							<td><?php echo $bbnSP2['ppnrest']; ?></td>
							<td><?php echo $bbnSP2['pphsin']; ?></td>
							<td><?php echo $bbnSP2['pphall']; ?></td>
							<td><?php echo $bbnSP2['hapus']; ?></td>
							<td><?php echo $bbnSP2['khusus']; ?></td>
							<td><?php echo $bbnSP2['tlain']; ?></td>
							<td><?php echo $bbnSP2['lokasi']; ?></td>
						</tr>
<?php endforeach ?>
					</table>
					<form method="post" action="">
						<table class="table">
							<tr>
								<th class="visible-print">NP2</th>
								<th>No. ND</th>
								<th>Tgl. ND</th>
								<th>Wajib Pajak</th>
								<th>Kode</th>
								<th colspan="2">Masa</th>
								<th>Supervisor</th>
							</tr>
	<?php foreach ($calonND as $clnND): ?>
							<tr>
								<td><input type="text" class="form-control char4" name="rik_nd_no[]" value=""></td>
								<td><input type="text" class="form-control char9" name="rik_nd_tgl[]" value="" placeholder="DD-MM-YYYY"></td>
								<td class="visible-print"><a href="/pemeriksaan/lp2/<?php echo $clnND['rik_lp2_no']; ?>"><?php echo $this->pemeriksaan_model->formatNP2($clnND['rik_lp2_no']); ?></a></td>
								<td><?php echo $clnND['rik_nama']; ?><br><span class="badge"><?php echo $this->pemeriksaan_model->formatNPWP($clnND['rik_npwp']); ?></span><input type="hidden" name="rik_npwp[]" value="<?php echo $clnND['rik_npwp']; ?>"></td>
								<td><?php echo $clnND['rik_kode']; ?><input type="hidden" name="rik_kode[]" value="<?php echo $clnND['rik_kode']; ?>"></td>
								<td><?php echo $clnND['rik_ms1']; ?><input type="hidden" name="rik_ms1[]" value="<?php echo $clnND['rik_ms1']; ?>"></td>
								<td><?php echo $clnND['rik_ms2']; ?><input type="hidden" name="rik_ms2[]" value="<?php echo $clnND['rik_ms2']; ?>"></td>
								<td>
									<select class="form-control char15" name="rik_tim_spv[]">
										<option value="">(tidak ada)</option>	
										<option value="060094698"<?php $clnND['rik_tim_spv'] == '060094698' ? ' selected' : '' ; ?>>Arse Sarjono Sitinjak</option>	
										<option value="060104312"<?php $clnND['rik_tim_spv'] == '060104312' ? ' selected' : '' ; ?>>Agus Indrayana</option>	
										<option value="060089048"<?php $clnND['rik_tim_spv'] == '060089048' ? ' selected' : '' ; ?>>Bernadinus Untung Prihantoro</option>	
									</select>
								</td>
							</tr>
	<?php endforeach ?>
						</table>
						<hr>
						<div class="text-center">
							<a class="btn btn-primary" href="/pemeriksaan/rekamND/cetak">Cetak ND</a>
							<button class="btn btn-primary" name="simpan">Simpan & Cetak Lampiran ND</button>
						</div>
					</form>
				</div>