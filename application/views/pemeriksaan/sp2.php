				<div class="col-md-9">
					<h1 class="page-header">SP2 <small><?php echo $buku . ' ' . $tahun; ?></small>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Riksis<span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2012; $i--): ?>
								<li><a href="/pemeriksaan/sp2/riksis/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
							</ul>
						</div>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Manual<span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2009; $i--): ?>
								<li><a href="/pemeriksaan/sp2/manual/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
							</ul>
						</div>
						<a class="btn btn-primary pull-right" href="/pemeriksaan/sp2/<?php echo strtolower($buku); ?>/<?php echo $tahun; ?>/cetak"><i class="typcn typcn-printer"></i>Cetak</a>
					</h1>
<?php /* ?><div class="progress hidden-print">
						<div class="progress-bar progress-bar-success" style="width: <?php echo round($stat->selesai/$stat->jumlah*100); ?>%">
							<span><?php echo $stat->selesai; ?> selesai</span>
						</div>
						<div class="progress-bar progress-bar-warning" style="width: <?php echo round($stat->tunggakan/$stat->jumlah*100); ?>%">
							<span><?php echo $stat->tunggakan; ?> belum selesai</span>
						</div>
					</div><?php */ ?>
					<div id="sp2terbit" style="height: 300px;"></div>
					<table class="table table-bordered">
						<tr>
							<th>No.</th>
							<th>Tgl.</th>
							<th>NPWP</th>
							<th>Nama WP</th>
							<th>Masa</th>
							<th>Tahun</th>
							<th>Kode</th>
							<th class="visible-print">Supervisor</th>
							<th class="visible-print">Ketua Tim</th>
							<th class="visible-print">Anggota</th>
						</tr>
<?php foreach ($sp2 as $prin): ?>
						<tr class="<?php echo $prin['rik_status']; ?>">
							<td class="right"><?php if ($prin['rik_lp2_no']): ?><a href="/pemeriksaan/lp2/<?php echo $prin['rik_lp2_no']; ?>"><?php endif ?><?php echo $prin['rik_sp2_no']; ?><?php if ($prin['rik_lp2_no']): ?></a><?php endif ?></td>
							<td class="center"><?php echo date('d-m-Y', strtotime($prin['rik_sp2_tgl'])); ?></td>
							<td class="center"><a href="/pemeriksaan/riwayat/<?php echo $prin['rik_npwp']; ?>"><?php echo $this->pemeriksaan_model->formatNPWP($prin['rik_npwp']); ?></a></td>
							<td><?php echo $prin['rik_nama']; ?></td>
							<td class="center"><?php echo substr($prin['rik_ms1'], 0, 2) . '-' . substr($prin['rik_ms2'], 0, 2); ?></td>
							<td class="center"><?php echo '20' . substr($prin['rik_ms1'], -2); ?></td>
							<td class="center"><?php echo $prin['rik_kode']; ?></td>
							<td class="visible-print"><?php echo $this->pemeriksaan_model->formatNama($prin['rik_tim_spv']); ?></td>
							<td class="visible-print"><?php echo $this->pemeriksaan_model->formatNama($prin['rik_tim_ket']); ?></td>
							<td class="visible-print"><?php echo $this->pemeriksaan_model->formatNama($prin['rik_tim_ag1']); ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>