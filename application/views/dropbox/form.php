				<ul class="nav nav-tabs">
					<li class="active"><a href="#single" data-toggle="tab">Perekaman Tunggal</a></li>
					<li><a href="#multiple" data-toggle="tab">Perekaman Beberapa</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="single">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="npwp" class="col-lg-1 control-label">NPWP</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP 9 digit tanpa tanda baca">
								</div>
								<label for="nama" class="col-lg-2 control-label">Nama WP</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Wajib Pajak">
								</div>
							</div>
							<div class="form-group">
								<label for="status" class="col-lg-1 control-label">Status SPT</label>
								<div class="col-lg-2">
									<div class="radio">
										<label>
											<input type="radio" name="status" id="status" value="N" checked>
											Nihil
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="status" id="status" value="K">
											Kurang Bayar
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="status" id="status" value="L">
											Lebih Bayar
										</label>
									</div>
								</div>
								<label for="jenis" class="col-lg-1 control-label">Jenis SPT</label>
								<div class="col-lg-1">
									<div class="radio">
										<label>
											<input type="radio" name="jenis" id="jenis" value="0" checked>
											1770
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="jenis" id="jenis" value="S">
											1770S
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="jenis" id="jenis" value="SS">
											1770SS
										</label>
									</div>
								</div>
								<label for="jenis" class="col-lg-1 control-label">Tahun Pajak</label>
								<div class="col-lg-2">
									<select name="thpj" id="thpj" class="form-control">
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
									</select>
								</div>
								<label for="telp" class="col-lg-1 control-label">Nomor Telepon</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" id="telp" name="telp" placeholder="081234567890">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-6 col-lg-6">
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="multiple">
						<div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Hanya bisa digunakan untuk merekam SPT-SPT 1770S/SS tahun pajak <strong>2013</strong> dengan status <strong>Nihil</strong>.</div>
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<div class="col-lg-1 col-lg-offset-10">
									<label for="jenis" class="control-label">S</label>
								</div>
								<div class="col-lg-1">
									<label for="jenis" class="control-label">SS</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3">
									<input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP 9 digit tanpa tanda baca">
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Wajib Pajak tanpa gelar/singkatan">
								</div>
								<div class="col-lg-3">
									<input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor telepon WP">
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="S">
									</div>
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="SS">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3">
									<input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP 9 digit tanpa tanda baca">
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Wajib Pajak tanpa gelar/singkatan">
								</div>
								<div class="col-lg-3">
									<input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor telepon WP">
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="S">
									</div>
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="SS">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3">
									<input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP 9 digit tanpa tanda baca">
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Wajib Pajak tanpa gelar/singkatan">
								</div>
								<div class="col-lg-3">
									<input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor telepon WP">
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="S">
									</div>
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="SS">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3">
									<input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP 9 digit tanpa tanda baca">
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Wajib Pajak tanpa gelar/singkatan">
								</div>
								<div class="col-lg-3">
									<input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor telepon WP">
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="S">
									</div>
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="SS">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3">
									<input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP 9 digit tanpa tanda baca">
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Wajib Pajak tanpa gelar/singkatan">
								</div>
								<div class="col-lg-3">
									<input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor telepon WP">
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="S">
									</div>
								</div>
								<div class="col-lg-1">
									<div class="radio">
										<input type="radio" name="jenis" id="jenis" value="SS">
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-lg-offset-10">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>
				</div>