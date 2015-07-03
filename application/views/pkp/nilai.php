				<div class="col-md-9">
					<table class="table">
						<tr>
							<th>Pegawai</th>
							<td><?php echo ucwords(strtolower($peg_nama)); ?></td>
						</tr>
						<tr>
							<th>Penilai</th>
							<td><?php echo ucwords(strtolower($pen_nama)); ?></td>
						</tr>
					</table>
					<form class="form-horizontal" role="form" method="post" action="/penghargaan/penilaian/<?php echo $peg_ip; ?>/<?php echo $pen_ip; ?>">
						<div class="form-group">
							<label class="col-lg-1 col-lg-offset-1">1</label>
							<label class="col-lg-1">2</label>
							<label class="col-lg-1">3</label>
							<label class="col-lg-1">4</label>
						</div>
<?php for ($i = 1; $i <= 33; $i++): ?>
						<div class="form-group">
							<label for="n<?php echo $i; ?>" class="col-lg-1 control-label"><?php echo $i; ?></label>
							<div class="col-lg-1">
								<input type="radio" name="n[<?php echo $i; ?>]" id="n[<?php echo $i; ?>]" value="1" required>
							</div>
							<div class="col-lg-1">
								<input type="radio" name="n[<?php echo $i; ?>]" id="n[<?php echo $i; ?>]" value="2" required>
							</div>
							<div class="col-lg-1">
								<input type="radio" name="n[<?php echo $i; ?>]" id="n[<?php echo $i; ?>]" value="3" required>
							</div>
							<div class="col-lg-1">
								<input type="radio" name="n[<?php echo $i; ?>]" id="n[<?php echo $i; ?>]" value="4" required>
							</div>
						</div>
<?php endfor ?>
						<div class="form-group">
							<div class="col-lg-offset-4 col-lg-1">
								<button type="submit" name="nilai" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</form>
				</div>