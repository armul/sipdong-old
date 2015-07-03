				<div class="col-md-9">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#newrecord" data-toggle="tab">Rekam Baru</a></li>
						<li><a href="#unfinished" data-toggle="tab">Belum Diproses</a></li>
						<li><a href="#info" data-toggle="tab">Debug info</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade" id="unfinished">
							<h1 class="page-header">Belum dikerjakan</h1>
	<?php if (isset($suratmasuk)): ?>
						<table class="table table-bordered">
								<tr>
									<th>No.</th>
									<th>Pengirim</th>
									<th>Hal</th>
								</tr>
	<?php foreach ($suratmasuk as $sm): ?>
							<tr>
									<td class="text-right"><span><a href="/tatausaha/suratmasuk/<?php echo $sm['tu_sm_noagd']; ?>" href="/tatausaha/suratmasuk/<?php echo $sm['tu_sm_noagd']; ?>"><?php echo $sm['tu_sm_noagd']; ?></a></span></td>
									<td><a href="/tatausaha/suratmasuk/<?php echo $sm['tu_sm_pengirim']; ?>"><?php echo $sm['tu_sm_pengirim']; ?></a></td>
									<td><?php echo preg_replace('/a.n. ([A-Za-z0-9 \/]+)$/', 'a.n. <a href="/tatausaha/suratmasuk/' . $sm['tu_sm_npwp'] . '">$1</a>', $sm['tu_sm_hal']); ?></td>
								</tr>
	<?php endforeach ?>
						</table>
	<?php endif ?>
						</div>
						<div class="tab-pane active" id="newrecord">
							<h2>Rekam baru</h2>
							<form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<div class="form-group">
									<label for="tu_sm_nosrt" class="col-md-2 control-label">No. Surat</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="tu_sm_nosrt" name="tu_sm_nosrt" placeholder="Nomor Surat">
									</div>
									<label for="tu_sm_tgsrt" class="col-md-2 control-label">Tgl. Surat</label>
									<div class="col-md-4">
										<input type="date" class="form-control" id="tu_sm_tgsrt" name="tu_sm_tgsrt" placeholder="DD-MM-YYYY">
									</div>
								</div>
								<div class="form-group">
									<label for="tu_sm_pengirim" class="col-md-2 control-label">Pengirim</label>
									<div class="col-md-4" id="the-basics">
										<input type="text" class="form-control typeahead" id="tu_sm_pengirim" name="tu_sm_pengirim" placeholder="Nama jabatan penanda tangan surat">
									</div>
									<label for="tu_sm_hal" class="col-md-2 control-label">Hal</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="tu_sm_hal" name="tu_sm_hal" placeholder="Hal surat">
									</div>
								</div>
								<div class="form-group">
									<label for="tu_sm_npwp" class="col-md-2 control-label">NPWP</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="tu_sm_npwp" name="tu_sm_npwp" placeholder="NPWP terkait">
									</div>
								</div>
								<div class="form-group">
									<label for="tu_sm_mspj" class="col-md-2 control-label">Masa Pajak</label>
									<div class="col-md-2">
										<select class="form-control" id="tu_sm_mspj" name="tu_sm_mspj">
											<option value="">--</option>
											<option value="01">Jan</option>
											<option value="02">Feb</option>
											<option value="03">Mar</option>
											<option value="04">Apr</option>
											<option value="05">Mei</option>
											<option value="06">Jun</option>
											<option value="07">Jul</option>
											<option value="08">Ags</option>
											<option value="09">Sep</option>
											<option value="10">Okt</option>
											<option value="11">Nov</option>
											<option value="12">Des</option>
										</select>
									</div>
									<div class="col-md-2">
										<select class="form-control" id="tu_sm_mspj" name="tu_sm_mspj">
											<option value="">--</option>
											<option value="01">Jan</option>
											<option value="02">Feb</option>
											<option value="03">Mar</option>
											<option value="04">Apr</option>
											<option value="05">Mei</option>
											<option value="06">Jun</option>
											<option value="07">Jul</option>
											<option value="08">Ags</option>
											<option value="09">Sep</option>
											<option value="10">Okt</option>
											<option value="11">Nov</option>
											<option value="12">Des</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="tu_sm_thpj" class="col-md-2 control-label">Tahun Pajak</label>
									<div class="col-md-2">
										<select class="form-control" id="tu_sm_thpj" name="tu_sm_thpj">
											<option value="">----</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-2 col-md-offset-2">
										<input type="submit" name="tu_sm_simpan" id="tu_sm_simpan" value="Simpan" class="btn btn-primary">
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="info">
							<h2>Belum didistribusikan.</h2>
							<pre><?php echo $this->db->last_query(); ?></pre>
							<pre>
	<?php print_r($_SESSION); ?>
							</pre>
						</div>
					</div>
				</div>