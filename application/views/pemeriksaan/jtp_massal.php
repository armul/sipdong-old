				<div class="col-md-9">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<table class="table table-striped">
							<tr>
								<th>Nama WP</th>
								<th>NPWP</th>
								<th>Masa</th>
								<th>Kode</th>
								<th>Tgl. SP2</th>
								<th>Tgl. JT</th>
								<th>Prognosa</th>
							</tr>
<?php foreach ($jtpm as $lp2): ?>
							<tr>
								<td><?php echo $lp2['rik_nama']; ?></td>
								<td><input type="text" name="npwp[]" value="<?php echo $lp2['rik_npwp']; ?>" size="15" readonly></td>
								<td><input type="text" name="ms1[]" value="<?php echo $lp2['rik_ms1']; ?>" size="4" readonly><input type="hidden" name="ms2[]" value="<?php echo $lp2['rik_ms2']; ?>" size="4" readonly></td>
								<td><input type="text" name="kode[]" value="<?php echo $lp2['rik_kode']; ?>" size="4" readonly></td>
								<td><?php echo $lp2['rik_sp2_tgl']; ?></td>
								<td><input type="text" name="jtp_tgl[]" value="<?php echo substr($lp2['rik_sp2_tgl'], 8, 2) . '/' . str_pad((substr($lp2['rik_sp2_tgl'], 5, 2)-6) <= 0 ? (substr($lp2['rik_sp2_tgl'], 5, 2)+6) : (substr($lp2['rik_sp2_tgl'], 5, 2)-6), 2, '0', STR_PAD_LEFT) . '/' . ((substr($lp2['rik_sp2_tgl'], 5, 2)-6) <= 0 ? (substr($lp2['rik_sp2_tgl'], 0, 4)-1): substr($lp2['rik_sp2_tgl'], 0, 4)); ?>"></td>
								<td><input type="text" name="prognosa[]" value="0"></td>
							</tr>
<?php endforeach ?>
						</table>
						<button class="btn btn-primary pull-right" type="submit" name="simpan">Simpan</button>
					</form>
				</div>