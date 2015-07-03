				<div class="col-md-9">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<table class="table table-striped">
							<tr>
								<th>NPWP</th>
								<th>Masa 1</th>
								<th>Masa 2</th>
								<th>Kode</th>
								<th>Nama</th>
								<th>LP2 No.</th>
								<th>LP2 Tgl.</th>
								<th>ALPP</th>
							</tr>
<?php foreach ($lp2m as $lp2): ?>
							<tr>
								<td><input type="text" name="npwp[]" value="<?php echo $lp2['rik_npwp']; ?>" size="15"></td>
								<td><input type="text" name="ms1[]" value="<?php echo $lp2['rik_ms1']; ?>" size="4"></td>
								<td><input type="text" name="ms2[]" value="<?php echo $lp2['rik_ms2']; ?>" size="4"></td>
								<td><input type="text" name="kode[]" value="<?php echo $lp2['rik_kode']; ?>" size="4"></td>
								<td><?php echo $lp2['rik_nama']; ?></td>
								<td><input type="text" name="lp2_no[]"></td>
								<td><input type="text" name="lp2_tgl[]"></td>
								<td><a target="new" href="http://10.254.4.54/ALPPedit.asp?ID_SIAP=<?php echo $lp2['rik_npwp'] . substr($lp2['rik_ms1'], 0, 2) . '20' . substr($lp2['rik_ms1'], 2, 2) . substr($lp2['rik_ms2'], 0, 2) . '20' . substr($lp2['rik_ms2'], 2, 2) . $lp2['rik_kode']; ?>">ALPP</a></td>
							</tr>
<?php endforeach ?>
						</table>
						<button class="btn btn-primary pull-right" type="submit" name="simpan">Simpan</button>
					</form>
				</div>