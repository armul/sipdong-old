				<div class="col-md-9">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#">Rekam Baru</a></li>
						<li><a href="/tatausaha/suratmasuk/<?php echo date('Y'); ?>">Agenda</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active">
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
									<div class="col-md-10" id="pengirim">
										<input type="text" class="form-control typeahead" id="tu_sm_pengirim" name="tu_sm_pengirim" placeholder="Nama jabatan penanda tangan surat">
									</div>
								</div>
								<div class="form-group">
									<label for="tu_sm_hal" class="col-md-2 control-label">Hal</label>
									<div class="col-md-10" id="hal">
										<input type="text" class="form-control typeahead" id="tu_sm_hal" name="tu_sm_hal" placeholder="Hal surat">
									</div>
								</div>
								<hr>
								<div class="form-group">
									<label for="tu_sm_npwp" class="col-md-2 control-label">Wajib Pajak</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="tu_sm_npwp" name="tu_sm_npwp" placeholder="NPWP terkait">
									</div>
									<label for="tu_sm_mspj" class="col-md-1 control-label">Masa</label>
									<div class="col-md-2">
										<select class="form-control" id="tu_sm_mspj" name="tu_sm_mspj">
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
									<div class="col-md-2">
										<select class="form-control" id="tu_sm_mspj" name="tu_sm_mspj">
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
									<div class="col-md-2">
										<select class="form-control" id="tu_sm_thpj" name="tu_sm_thpj">
											<option value="">tahun</option>
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
					</div>
				</div>
				<script type="text/javascript" src="/js/typeahead.bundle.js"></script>
				<script type="text/javascript">var substringMatcher = function(strs) {
	return function findMatches(q, cb) {
		var matches, substringRegex;
		matches = [];
		substrRegex = new RegExp(q, 'i');
		$.each(strs, function(i, str) {
			if (substrRegex.test(str)) {
				matches.push(str);
			}
		});
		cb(matches);
	};
};
var pejabat = [
	'Kepala KPP Pratama Jambi',
	'Kepala Subbagian Umum dan Kepatuhan Internal',
	'Kepala Seksi Pengolahan Data dan Informasi',
	'Kepala Seksi Pelayanan',
	'Kepala Seksi Penagihan',
	'Kepala Seksi Pemeriksaan',
	'Kepala Seksi Ekstensifikasi dan Penyuluhan',
	'Kepala Seksi Pengawasan dan Konsultasi I',
	'Kepala Seksi Pengawasan dan Konsultasi II',
	'Kepala Seksi Pengawasan dan Konsultasi III',
	'Kepala Seksi Pengawasan dan Konsultasi IV',
	'Kepala Kanwil DJP Sumatera Barat dan Jambi',
	'Direktur Peraturan Perpajakan I',
	'Direktur Peraturan Perpajakan II',
	'Direktur Pemeriksaan dan Penagihan',
	'Direktur Intelijen dan Penyidikan',
	'Direktur Ekstensifikasi dan Penilaian',
	'Direktur Keberatan dan Banding',
	'Direktur Potensi, Kepatuhan, dan Penerimaan',
	'Direktur Penyuluhan, Pelayanan, dan Hubungan Masyarakat',
	'Direktur Teknologi Informasi Perpajakan',
	'Direktur Kepatuhan Internal dan Transformasi Sumber Daya Aparatur',
	'Direktur Transformasi Teknologi Komunikasi dan Informasi',
	'Direktur Transformasi Proses Bisnis'
];
var hal = [
	'Instruksi Melakukan Pemeriksaan Khusus',
	'Instruksi Melakukan Pemeriksaan Tujuan Lain',
	'Laporan Hasil Pemeriksaan',
	'LHP Bukti Permulaan',
	'Pemberitahuan Pemeriksaan Bukti Permulaan',
	'SPT Masa PPN',
	'SPT Tahunan PPh'
];
$('#pengirim .typeahead').typeahead({
	hint: true,
	highlight: true,
	minLength: 1
},
{
	name: 'pejabat',
	source: substringMatcher(pejabat)
});
$('#hal .typeahead').typeahead({
	hint: true,
	highlight: true,
	minLength: 1
},
{
	name: 'hal',
	source: substringMatcher(hal)
});</script>