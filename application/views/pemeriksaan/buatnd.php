				<div class="col-md-9">
					<h1 class="page-header">Nota Dinas Penyusunan Rencana Pemeriksaan</h1>
					<form class="form-horizontal" role="form">
						<div class="row">
							<div class="col-md-12" style="text-align: center;"><strong>NOTA DINAS</strong></div>
						</div>
						<div class="row">
							<div class="col-md-1 col-md-offset-4">Nomor</div>
							<div class="col-md-5">ND-<?php echo $nd ? $nd->no : ''?>/WPJ.27/KP.0105/<?php echo $nd ? date('Y', $nd->tgl) : date('Y'); ?></div>
						</div>
						<div class="row">
							<div class="col-md-1 col-md-offset-4">Tanggal</div>
							<div class="col-md-5"><?php echo $nd ? date('j F Y', $nd->tgl) : date('j F Y'); ?></div>
						</div>
						<br>	
						<div class="form-group">
							<div class="col-md-2">Kepada</div>
							<div class="col-md-3">Supervisor Kelompok</div>
							<div class="col-md-1">
								<label><input type="radio" name="kelompok" id="kelompok" value="060094698"<?php echo $nd->spv == '060094698' ? ' selected' : ''?>>I</label>
							</div>
							<div class="col-md-1">
								<label><input type="radio" name="kelompok" id="kelompok" value="060104312"<?php echo $nd->spv == '060104312' ? ' selected' : ''?>>II</label>
							</div>
							<div class="col-md-1">
								<label><input type="radio" name="kelompok" id="kelompok" value="060089048"<?php echo $nd->spv == '060089048' ? ' selected' : ''?>>III</label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-2">Dari</div>
							<div class="col-md-10 text-muted">Kepala KPP Pratama Jambi</div>
						</div>
						<div class="form-group">
							<div class="col-md-2">Lampiran</div>
							<div class="col-md-10 text-muted">1 (Satu) Set</div>
						</div>
						<div class="form-group">
							<div class="col-md-2">Hal</div>
							<div class="col-md-10 text-muted">Penyusunan Rencana Pemeriksaan</div>
						</div>
						<hr>
						<p>Sehubungan dengan akan dilakukannya pemeriksaan terhadap Wajib Pajak:</p>
						<div class="form-group">
							<label for="nama" class="col-md-2 control-label">Nama</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="nama" id="nama"<?php echo $nd ? ' value="' . $nd->nama . '" disabled' :' placeholder="PT Cahaya Panjang Doa Abadi"'; ?>>
							</div>
						</div>
						<div class="form-group">
							<label for="npwp" class="col-md-2 control-label">NPWP</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="npwp" id="npwp"<?php echo $nd ? ' value="' . $nd->npwp . '" disabled' :' placeholder="48.484.848.4-848.000"'; ?>>
							</div>
						</div>
						<div class="form-group">
							<label for="alamat" class="col-md-2 control-label">Alamat</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="alamat" id="alamat"<?php echo $nd ? ' value="' . $nd->alamat . '" disabled' :' placeholder="Jl Pulangnya Searah"'; ?>>
							</div>
						</div>
						<div class="form-group">
							<label for="namawp" class="col-md-2 control-label">Masa/Tahun Pajak</label>
							<div class="col-md-2">
								<select class="form-control" name="ms1" id="ms1"<?php echo $nd ? ' disabled' : ''; ?>
									<option value="01">---</option>
									<option value="01"<?php echo $nd->ms1 == '01' ? ' selected' : ''; ?>>Jan</option>
									<option value="02"<?php echo $nd->ms1 == '02' ? ' selected' : ''; ?>>Feb</option>
									<option value="03"<?php echo $nd->ms1 == '03' ? ' selected' : ''; ?>>Mar</option>
									<option value="04"<?php echo $nd->ms1 == '04' ? ' selected' : ''; ?>>Apr</option>
									<option value="05"<?php echo $nd->ms1 == '05' ? ' selected' : ''; ?>>Mei</option>
									<option value="06"<?php echo $nd->ms1 == '06' ? ' selected' : ''; ?>>Jun</option>
									<option value="07"<?php echo $nd->ms1 == '07' ? ' selected' : ''; ?>>Jul</option>
									<option value="08"<?php echo $nd->ms1 == '08' ? ' selected' : ''; ?>>Ags</option>
									<option value="09"<?php echo $nd->ms1 == '09' ? ' selected' : ''; ?>>Sep</option>
									<option value="10"<?php echo $nd->ms1 == '10' ? ' selected' : ''; ?>>Okt</option>
									<option value="11"<?php echo $nd->ms1 == '11' ? ' selected' : ''; ?>>Nov</option>
									<option value="12"<?php echo $nd->ms1 == '12' ? ' selected' : ''; ?>>Des</option>
								</select>
							</div>
							<div class="col-md-2">
								<select class="form-control" name="ms2" id="ms2"<?php echo $nd ? ' disabled' : ''; ?>>
									<option value="12">---</option>
									<option value="01"<?php echo $nd->ms2 == '01' ? ' selected' : ''; ?>>Jan</option>
									<option value="02"<?php echo $nd->ms2 == '02' ? ' selected' : ''; ?>>Feb</option>
									<option value="03"<?php echo $nd->ms2 == '03' ? ' selected' : ''; ?>>Mar</option>
									<option value="04"<?php echo $nd->ms2 == '04' ? ' selected' : ''; ?>>Apr</option>
									<option value="05"<?php echo $nd->ms2 == '05' ? ' selected' : ''; ?>>Mei</option>
									<option value="06"<?php echo $nd->ms2 == '06' ? ' selected' : ''; ?>>Jun</option>
									<option value="07"<?php echo $nd->ms2 == '07' ? ' selected' : ''; ?>>Jul</option>
									<option value="08"<?php echo $nd->ms2 == '08' ? ' selected' : ''; ?>>Ags</option>
									<option value="09"<?php echo $nd->ms2 == '09' ? ' selected' : ''; ?>>Sep</option>
									<option value="10"<?php echo $nd->ms2 == '10' ? ' selected' : ''; ?>>Okt</option>
									<option value="11"<?php echo $nd->ms2 == '11' ? ' selected' : ''; ?>>Nov</option>
									<option value="12"<?php echo $nd->ms2 == '12' ? ' selected' : ''; ?>>Des</option>
								</select>
							</div>
							<div class="col-md-2">
								<select class="form-control" name="th" id="th"<?php echo $nd ? ' disabled' : ''; ?>
									<option<?php echo $nd->th == '14' ? ' selected' : ''; ?>>2014</option>
									<option<?php echo $nd->th == '13' ? ' selected' : ''; ?>>2013</option>
									<option<?php echo $nd->th == '12' ? ' selected' : ''; ?>>2012</option>
									<option<?php echo $nd->th == '11' ? ' selected' : ''; ?>>2011</option>
									<option<?php echo $nd->th == '10' ? ' selected' : ''; ?>>2010</option>
									<option<?php echo $nd->th == '09' ? ' selected' : ''; ?>>2009</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="namawp" class="col-md-2 control-label">Kode Pemeriksaan</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="namawp" id="namawp"<?php echo $nd ? ' value="' . $nd->kode . '" disabled' :' placeholder="4182"'; ?>>
							</div>
						</div>
					</form>
					<p>dengan ini diminta kepada Saudara untuk menyusun usulan Rencana Pemeriksaan sesuai dengan SE-126/PJ/2010 tanggal 26 November 2010 berdasarkan data sebagaimana terlampir.</p>
					<p>Demikian untuk dilaksanakan sebaik-baiknya dengan penuh tanggung jawab.</p>
					<p>Kepala Kantor</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Eko Budihartono<br>NIP 197106011996031001</p>
					<pre><?php print_r($nd); ?></pre>
				</div>