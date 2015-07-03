				<div class="col-md-9">
					<h1 class="page-header"><i class="typcn typcn-document"></i> Rekam SP2</h1>
					<form role="form" method="post" action="<?php echo '/' . uri_string(); ?>">
						<table class="table">
							<tr>
								<th>No. SP2</th>
								<th>Nama WP</th>
								<th>NPWP</th>
								<th>Kode</th>
								<th colspan="2">Masa</th>
								<th>Tim</th>
							</tr>
<?php foreach ($calonSP2 as $clnSP2): ?>
							<tr>
								<td><?php echo $clnSP2['rik_sp2_buku'] == 'R' ? '<input class="form-control char4" type="number" pattern="\d+">' : ''; ?></td>
								<td><span><?php echo $clnSP2['rik_nama']; ?></span></td>
								<td><input type="text" name="npwp" value="<?php echo $clnSP2['rik_npwp']; ?>" class="form-control char15" readonly></td>
								<td><input type="text" name="kode" value="<?php echo $clnSP2['rik_kode']; ?>" class="form-control char4" readonly></td>
								<td><input type="text" name="ms1" value="<?php echo $clnSP2['rik_ms1']; ?>" class="form-control char4" readonly></td>
								<td><input type="text" name="ms2" value="<?php echo $clnSP2['rik_ms2']; ?>" class="form-control char4" readonly></td>
								<td>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>1
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">2
										</label>
									</div>
								</td>
							</tr>
<?php endforeach ?>
						</table>
						<button class="btn btn-primary pull-right" type="submit">Simpan</button>
					</form>
				</div>