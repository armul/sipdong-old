				<div class="col-md-9">
					<h1 class="page-header">SPT Lebih Bayar</h1>
<?php if (isset($sptlb)): ?>
					<pre><?php print_r($sptlb); ?></pre>
<?php endif ?>
					<form class="form-horizontal" role="form" method="post" action="<?php echo '/' . uri_string(); ?>">
						<div class="form-group">
							<label for="npwp" class="col-sm-2 control-label">NPWP</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="npwp" id="npwp" placeholder="012345678331000" required="required">
							</div>
							<div class="col-sm-7">
								<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Wajib Pajak" required="required">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Masa Pajak</label>
							<div class="col-sm-2">
								<select class="form-control" name="m1pj" id="m1pj" required="required">
									<option value="">dari</option>
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
							<div class="col-sm-2">
								<select class="form-control" name="m2pj" id="m2pj" required="required">
									<option value="">sampai</option>
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
							<div class="col-sm-2">
								<select class="form-control" name="thpj" id="thpj" required="required">
									<option value="">tahun</option>
<?php for ($i = 0; $i <= 3; $i++): ?>
									<option value="<?php echo date('Y')-$i; ?>"><?php echo date('Y')-$i; ?></option>
<?php endfor ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="kap" class="col-sm-2 control-label">Nama KAP</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="kap" id="kap" placeholder="Nama Kantor Akuntan Publik">
							</div>
						</div>
						<div class="form-group">
							<label for="spt" class="col-sm-2 control-label">Jenis SPT</label>
							<div class="col-sm-4">
								<select class="form-control" name="spt" id="spt" required="required">
									<option value="">-- Pilih Jenis SPT --</option>
									<option value="2">SPT Masa PPN</option>
									<option value="4">SPT Tahunan PPh</option>
								</select>
							</div>
							<label for="pemb" class="col-sm-2 control-label">Pemb. ke-</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="pemb" id="pemb" placeholder="0" required="required">
							</div>
						</div>
						<h2>A. Pengecekan atas SPT Wajib Pajak</h2>
						<table class="table table-striped">
							<tr>
								<th>No.</th>
								<th>Kriteria</th>
								<th>Ya</th>
								<th>Tidak</th>
							</tr>
							<tr>
								<td class="center">1</td>
								<td>SPT telah sesuai UU KUP Pasal 3</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="a1" id="a11" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="a1" id="a12" value="T" required="required"></label></td>
							</tr>
							<tr>
								<td class="center">2</td>
								<td>SPT menyatakan Lebih Bayar</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="a2" id="a21" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="a2" id="a22" value="T" required="required"></label></td>
							</tr>
							<tr>
								<td class="center">3</td>
								<td>Memohon restitusi atas kelebihan pembayaran pajak</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="a3" id="a31" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="a3" id="a32" value="T" required="required"></label></td>
							</tr>
							<tr>
								<td class="center">4</td>
								<td><span class="badge">SPT pembetulan</span>Memenuhi ketentuan dalam Pasal 8 ayat (1) dan ayat (1a) UU KUP</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="a4" id="a41" value="Y" disabled="disabled" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="a4" id="a42" value="T" disabled="disabled" required="required"></label></td>
							</tr>
						</table>
						<h2>B. Pengecekan atas Kriteria/Syarat Wajib Pajak</h2>
						<table class="table table-striped">
							<tr>
								<th>No.</th>
								<th>Kriteria</th>
								<th>Ya</th>
								<th>Tidak</th>
							</tr>
							<tr>
								<td class="center">1</td>
								<td>Wajib Pajak kriteria tertentu sebagaimana dimaksud Pasal 17C UU KUP</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="b1" id="b11" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="b1" id="b12" value="T" required="required"></label></td>
							</tr>
							<tr>
								<td class="center">2</td>
								<td>Wajib Pajak yang memenuhi persyaratan tertentu sebagaimana dimaksud Pasal 17D UU KUP</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="b2" id="b21" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="b2" id="b22" value="T" required="required"></label></td>
							</tr>
							<tr>
								<td class="center">3</td>
								<td>Memilih dilakukan pengembalian pendahuluan</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="b3" id="b31" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="b3" id="b32" value="T" required="required"></label></td>
							</tr>
						</table>
						<h2>C. Pengecekan atas pemenuhan syarat dalam Pasal 5 ayat (2) PMK 17/PMK.03/2013</h2>
						<table class="table table-striped">
							<tr>
								<th>No.</th>
								<th>Kriteria</th>
								<th>Ya</th>
								<th>Tidak</th>
							</tr>
							<tr>
								<td class="center" rowspan="3">1</td>
								<td>Tahun pajak yang diperiksa diaudit oleh Akuntan Publik yang tercantum pada daftar nama Akuntan Publik</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c1" id="c11" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c1" id="c12" value="T" checked="checked" required="required"></label></td>
							</tr>
							<tr>
								<td colspan="3">
									<label for="pemb" class="col-sm-3 control-label">Nama Akuntan Publik</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="pemb" disabled="disabled" required="required">
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<label for="pemb" class="col-sm-3 control-label">No. Register Akt Publik</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="pemb" disabled="disabled" required="required">
									</div>
								</td>
							</tr>
							<tr>
								<td class="center">2</td>
								<td>Pendapat Akuntan Publik atas Laporan Keuangan Tahun Pajak yang diperiksa adalah Wajar Tanpa Pengecualian</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c2" id="c21" value="Y" disabled="disabled" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c2" id="c22" value="T" disabled="disabled" required="required"></label></td>
							</tr>
							<tr>
								<td class="center" rowspan="3">3</td>
								<td>Laporan Keuangan 1 (satu) tahun sebelum Tahun Pajak yang dimintakan restitusi diaudit oleh Akuntan Publik yang tercantum pada daftar nama Akuntan Publik</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c3" id="c31" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c3" id="c32" value="T" checked="checked" required="required"></label></td>
							</tr>
							<tr>
								<td colspan="3">
									<label for="pemb" class="col-sm-3 control-label">Nama Akuntan Publik</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="pemb" disabled="disabled" required="required">
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<label for="pemb" class="col-sm-3 control-label">No. Register Akt Publik</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="pemb" disabled="disabled" required="required">
									</div>
								</td>
							</tr>
							<tr>
								<td class="center">4</td>
								<td>Pendapat Akuntan Publik atas Laporan Keuangan 1 (satu) tahun sebelum Tahun Pajak yang dimintakan restitusi adalah WTP</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c4" id="c41" value="Y" disabled="disabled" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c4" id="c42" value="T" disabled="disabled" required="required"></label></td>
							</tr>
							<tr>
								<td class="center" rowspan="3">5</td>
								<td>Laporan Keuangan 2 (dua) tahun sebelum Tahun Pajak yang dimintakan restitusi diaudit oleh Akuntan Publik yang tercantum pada daftar nama Akuntan Publik</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c5" id="c51" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c5" id="c52" value="T" checked="checked" required="required"></label></td>
							</tr>
							<tr>
								<td colspan="3">
									<label for="pemb" class="col-sm-3 control-label">Nama Akuntan Publik</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="pemb" disabled="disabled" required="required">
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<label for="pemb" class="col-sm-3 control-label">No. Register Akt Publik</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="pemb" disabled="disabled" required="required">
									</div>
								</td>
							</tr>
							<tr>
								<td class="center">6</td>
								<td>Pendapat Akuntan Publik atas Laporan Keuangan 2 (dua) tahun sebelum Tahun Pajak yang dimintakan restitusi adalah WTP</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c6" id="c61" value="Y" disabled="disabled" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c6" id="c62" value="T" disabled="disabled" required="required"></label></td>
							</tr>
							<tr>
								<td class="center">7</td>
								<td>Sedang dilakukan Pemeriksaan Bukti Permulaan, penyidikan, atau penuntutan tindak pidana perpajakan</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c7" id="c71" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c7" id="c72" value="T" required="required"></label></td>
							</tr>
							<tr>
								<td class="center">8</td>
								<td>Dalam 5 (lima) tahun terakhir pernah dipidana karena melakukan tindak pidana di bidang perpajakan</td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c8" id="c81" value="Y" required="required"></label></td>
								<td><label class="radio"><input type="radio" class="custom-radio" data-toggle="radio" name="c8" id="c82" value="T"></label></td>
							</tr>
						</table>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary" name="simpan" id="simpan">Simpan & Cetak</button>
							</div>
						</div>
					</form>
				</div>