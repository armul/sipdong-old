				<div class="col-md-9">
					<ul class="nav nav-tabs">
						<li><a href="#unfinished" data-toggle="tab">Belum Diproses</a></li>
						<li><a href="#undistributed" data-toggle="tab">Belum Didistribusikan</a></li>
						<li><a href="#finished" data-toggle="tab">Selesai Diproses</a></li>
						<li class="active"><a href="#newrecord" data-toggle="tab">Rekam Baru</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade" id="unfinished">
							<h2>Belum dikerjakan.</h2>
	<?php if (isset($suratmasuk)): ?>
						<table class="table table-striped">
								<tr>
									<th>No.</th>
									<th>Pengirim</th>
									<th>Hal</th>
									<th>NPWP</th>
									<th>Proses</th>
								</tr>
	<?php foreach ($suratmasuk as $sm): ?>
							<tr>
									<td><span class="label label-info"><a data-toggle="modal" href="#sm<?php echo $sm['tu_sm_noagd']; ?>" href="/tatausaha/suratmasuk/<?php echo $sm['tu_sm_noagd']; ?>"><?php echo $sm['tu_sm_noagd']; ?></a></span></td>
									<td><a href="/tatausaha/suratmasuk/<?php echo $sm['tu_sm_pengirim']; ?>"><?php echo $sm['tu_sm_pengirim']; ?></a></td>
									<td><?php echo $sm['tu_sm_hal']; ?></td>
									<td><a href="/tatausaha/suratmasuk/<?php echo $sm['tu_sm_npwp']; ?>"><?php echo $this->tatausaha_model->formatNPWP($sm['tu_sm_npwp']); ?></a></td>
									<td><?php echo $sm['tu_sm_proses']; ?></td>
								</tr>
	<?php endforeach ?>
						</table>
	<?php foreach ($suratmasuk as $sm): ?>
						<div class="modal fade" id="sm<?php echo $sm['tu_sm_noagd']; ?>" tabindex="-1" role="dialog" aria-labelledby="RincianAgendaNo<?php echo $sm['tu_sm_noagd']; ?>" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<div class="modal-title">
												<span class="badge"><?php echo $sm['tu_sm_noagd']; ?></span> <?php echo $this->tatausaha_model->namaseksi[$_SESSION['es4']]; ?>
												<span class="pull-right"><?php echo $this->tatausaha_model->formatTanggal($sm['tu_sm_tgagd']); ?></span>
											</div>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-2"><span class="label label-default">Pengirim</span></div>
												<div class="col-md-5"><?php echo $sm['tu_sm_pengirim']; ?></div>
												<div class="col-md-2"><span class="label label-default">No. Surat</span></div>
												<div class="col-md-3"><?php echo $sm['tu_sm_nosrt']; ?></div>
											</div>
											<div class="row">
												<div class="col-md-2"><span class="label label-default">Hal</span></div>
												<div class="col-md-5"><?php echo $sm['tu_sm_hal']; ?></div>
												<div class="col-md-2"><span class="label label-default">Tgl. Surat</span></div>
												<div class="col-md-3"><?php echo $this->tatausaha_model->formatTanggal($sm['tu_sm_tgsrt']); ?></div>
											</div>
											<div class="row">
												<div class="col-md-2"><span class="label label-default">NPWP</span></div>
												<div class="col-md-5"><?php echo $this->tatausaha_model->formatNPWP($sm['tu_sm_npwp']); ?></div>
												<div class="col-md-1"><span class="label label-default">Masa</span></div>
												<div class="col-md-1"><?php echo $this->tatausaha_model->formatMasa($sm['tu_sm_mspj']); ?></div>
												<div class="col-md-1"><span class="label label-default">Tahun</span></div>
												<div class="col-md-1"><?php echo $sm['tu_sm_thpj']; ?></div>
											</div>
											<div class="row">
												<div class="col-md-2"><span class="label label-default">Pemroses</span></div>
												<div class="col-md-10"><?php echo $sm['tu_sm_pemroses']; ?></div>
											</div>
											<div class="row">
												<div class="col-md-2"><span class="label label-default">Proses</span></div>
												<div class="col-md-10"><?php echo $sm['tu_sm_proses']; ?> pada tanggal <?php echo $this->tatausaha_model->formatTanggal($sm['tu_sm_tgproses']); ?></div>
											</div>
											<div class="row">
												<div class="col-md-2"><span class="label label-default">Catatan</span></div>
												<div class="col-md-10"><?php echo $sm['tu_sm_catatan']; ?></div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
	<?php endforeach ?>
							<pre><?php echo $this->db->last_query(); ?></pre>
	<?php endif ?>
						</div>
						<div class="tab-pane fade" id="undistributed">
							<h2>Belum didistribusikan.</h2>
							<pre>
	<?php print_r($_SESSION); ?>
							</pre>
						</div>
						<div class="tab-pane fade" id="finished">
							<h2>Selesai diproses.</h2>
						</div>
						<div class="tab-pane active" id="newrecord">
							<h2>Rekam baru.</h2>
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
									<div class="col-md-4">
										<input type="text" class="form-control" id="tu_sm_pengirim" name="tu_sm_pengirim" placeholder="Nama jabatan penanda tangan surat">
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
					</div>
				</div>