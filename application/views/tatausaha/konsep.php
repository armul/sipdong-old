				<div class="col-md-9">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="col-sm-2 control-label">219</label>
							<label class="col-sm-10 control-label pull-right"><?php echo date('d M Y'); ?></label>
						</div>
						<hr>
						<div class="form-group">
							<label for="tu_sk_buku" class="col-sm-2 control-label">Jenis Naskah</label>
							<div class="col-sm-10">
								<select class="form-control" id="tu_sk_buku" name="tu_sk_buku">
									<option value="ND">Nota Dinas</option>
									<option value="S">Surat</option>
									<option value="SP">Surat Pengantar</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="tu_sk_tujuan" class="col-sm-2 control-label">Tujuan</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="tu_sk_tujuan" placeholder="Nama Jabatan yang Dituju">
							</div>
						</div>
						<div class="form-group">
							<label for="tu_sk_hal" class="col-sm-2 control-label">Hal</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="tu_sk_hal" placeholder="Hal Surat">
							</div>
						</div>
						<div class="form-group">
							<label for="tu_sk_badan" class="col-sm-2 control-label">Badan Surat</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="tu_sk_badan"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Penanda tangan</label>
							<div class="col-sm-10">
								<label class="radio">
									<input class="custom-radio" name="tu_sk_pengirim" id="tu_sk_pengirim1" value="130929030" data-toggle="radio" type="radio">
										<span class="icons">
											<span class="icon-unchecked"></span>
											<span class="icon-checked"></span>
										</span>
									Kepala Seksi Pemeriksaan dan Kepatuhan Internal
								</label>
								<label class="radio">
									<input class="custom-radio" name="tu_sk_pengirim" id="tu_sk_pengirim2" value="060090104" data-toggle="radio" checked="" type="radio">
										<span class="icons">
											<span class="icon-unchecked"></span>
											<span class="icon-checked"></span>
										</span>
									Kepala KPP Pratama Jambi
								</label>
							</div>
						</div>
						<hr>
						<div class="text-center">
							<button class="btn btn-default">Simpan sebagai Konsep</button>
							<button class="btn btn-primary">Beri Nomor & Simpan</button>
						</div>
					</form>
				</div>