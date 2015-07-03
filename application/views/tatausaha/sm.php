					<div class="row page-header">
						<div class="col-md-10">
							<span class="badge"><?php echo $suratmasuk[0]['tu_sm_noagd']; ?></span> <b><?php echo $this->tatausaha_model->namaseksi[$_SESSION['es4']]; ?></b>
						</div>
						<div class="col-md-2">
							<span class="pull-right"><?php echo $this->tatausaha_model->formatTanggal($suratmasuk[0]['tu_sm_tgagd']); ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-1"><span class="label label-default">Pengirim</span></div>
						<div class="col-md-6"><?php echo $suratmasuk[0]['tu_sm_pengirim']; ?></div>
						<div class="col-md-1"><span class="label label-default">No. Surat</span></div>
						<div class="col-md-4"><?php echo $suratmasuk[0]['tu_sm_nosrt']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-1"><span class="label label-default">Hal</span></div>
						<div class="col-md-6"><?php echo $suratmasuk[0]['tu_sm_hal']; ?></div>
						<div class="col-md-1"><span class="label label-default">Tgl. Surat</span></div>
						<div class="col-md-4"><?php echo $this->tatausaha_model->formatTanggal($suratmasuk[0]['tu_sm_tgsrt']); ?></div>
					</div>
					<div class="row">
						<div class="col-md-1"><span class="label label-default">NPWP</span></div>
						<div class="col-md-6"><?php echo $this->tatausaha_model->formatNPWP($suratmasuk[0]['tu_sm_npwp']); ?></div>
						<div class="col-md-1"><span class="label label-default">Masa</span></div>
						<div class="col-md-1"><?php echo $this->tatausaha_model->formatMasa($suratmasuk[0]['tu_sm_mspj']); ?></div>
						<div class="col-md-1"><span class="label label-default">Tahun</span></div>
						<div class="col-md-1"><?php echo $suratmasuk[0]['tu_sm_thpj']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-1"><span class="label label-default">Pemroses</span></div>
						<div class="col-md-11"><?php echo $suratmasuk[0]['tu_sm_pemroses']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-1"><span class="label label-default">Proses</span></div>
						<div class="col-md-11"><?php echo $suratmasuk[0]['tu_sm_proses']; ?> pada tanggal <?php echo $this->tatausaha_model->formatTanggal($suratmasuk[0]['tu_sm_tgproses']); ?></div>
					</div>
					<div class="row">
						<div class="col-md-1"><span class="label label-default">Catatan</span></div>
						<div class="col-md-11"><?php echo $suratmasuk[0]['tu_sm_catatan']; ?></div>
					</div>