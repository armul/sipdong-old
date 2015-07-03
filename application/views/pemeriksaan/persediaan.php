				<div class="col-md-9">
					<h1 class="page-header">Persediaan WP untuk Diperiksa</h1>
					<form method="post" action="<?php echo '/' . uri_string(); ?>" class="form-horizontal">
						<table class="table table-striped">
							<tr>
								<th></th>
								<th style="text-align: center;">Nama Wajib Pajak</th>
								<th style="text-align: center;">Jenis Pajak</th>
								<th colspan="2" style="text-align: center;">Masa Pajak</th>
								<th style="text-align: center;">Nilai SPT</th>
								<th style="text-align: center;">JT SKP</th>
								<th></th>
							</tr>
<?php $i = 0; ?>
<?php foreach ($persediaan as $pers): ?>
							<tr>
								<td><label class="checkbox" for="checkbox<?php echo $i;?>"><input type="checkbox" name="check[]" value="<?php echo $i;?>" data-toggle="checkbox" id="checkbox<?php echo $i++;?>"></label></td>
								<td><input type="hidden" name="rik_npwp[]" value="<?php echo $pers['rik_npwp']; ?>"><?php echo $pers['rik_nama']; ?></td>
								<td style="text-align: center;"><input type="hidden" name="rik_kode[]" value="<?php echo $pers['rik_kode']; ?>"><?php echo $pers['rik_kode'] == '2182' ? 'PPN' : ($pers['rik_kode'] == '4182' ? 'PPh' : ''); ?></td>
								<td style="text-align: center;"><input type="hidden" name="rik_ms1[]" value="<?php echo $pers['rik_ms1']; ?>"><?php echo $pers['rik_ms1']; ?></td>
								<td style="text-align: center;"><input type="hidden" name="rik_ms2[]" value="<?php echo $pers['rik_ms2']; ?>"><?php echo $pers['rik_ms2']; ?></td>
								<td style="text-align: right"><?php echo number_format($pers['rik_prognosa']); ?></td>
								<td style="text-align: center;"><?php echo $pers['rik_jtp_tgl']; ?></td>
								<td><span class="btn btn-primary fui-plus add"></span></td>
							</tr>
<?php endforeach ?>
						</table>
						<hr>
						<div class="form-group">
							<label for="rik_usl_no" class="col-md-3 control-label">Nomor Daftar Nominatif</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="rik_usl_no" id="rik_usl_no" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="rik_usl_no" class="col-md-3 control-label">Tanggal Daftar Nominatif</label>
							<div class="col-md-9">
								<input type="date" class="form-control" name="rik_usl_tgl" id="rik_usl_tgl" placeholder="DD-MM-YYYY">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button class="btn btn-primary" name="simpan">Simpan</button>
							</div>
						</div>
					</form>
				</div><?php $_SESSION['script']['dafnom'] = $i; ?>