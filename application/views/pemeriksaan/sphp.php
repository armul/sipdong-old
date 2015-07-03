				<div class="col-md-9">
					<h1 class="page-header">SPHP <small><?php echo $buku . ' ' . $tahun; ?></small>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Riksis<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2013; $i--): ?>
								<li><a href="/pemeriksaan/sphp/riksis/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
							</ul>
						</div>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Manual<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2008; $i--): ?>
								<li><a href="/pemeriksaan/sphp/manual/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
							</ul>
						</div>
					</h1>
					<table class="table table-bordered">
						<tr>
							<th style="text-align: center;">No.</th>
							<th style="text-align: center;">Tgl.</th>
							<th style="text-align: center;">NPWP</th>
							<th style="text-align: center;">Nama WP</th>
							<th style="text-align: center;">Masa</th>
							<th style="text-align: center;">Tahun</th>
							<th style="text-align: center;">Kode</th>
						</tr>
<?php foreach ($sphp as $php): ?>
						<tr>
							<td style="text-align: right;"><?php if ($php['rik_lp2_no']): ?><a href="/pemeriksaan/lp2/<?php echo $php['rik_lp2_no']; ?>"><?php endif ?><?php echo $php['rik_sphp_no']; ?><?php if ($php['rik_lp2_no']): ?></a><?php endif ?></td>
							<td style="text-align: center;"><?php echo date('d-m-Y', strtotime($php['rik_sphp_tgl'])); ?></td>
							<td style="text-align: center;"><a href="/pemeriksaan/riwayat/<?php echo $php['rik_npwp']; ?>"><?php echo $this->pemeriksaan_model->formatNPWP($php['rik_npwp']); ?></a></td>
							<td><?php echo $php['rik_nama']; ?></td>
							<td style="text-align: center;"><?php echo substr($php['rik_ms1'], 0, 2) . '-' . substr($php['rik_ms2'], 0, 2); ?></td>
							<td style="text-align: center;"><?php echo '20' . substr($php['rik_ms1'], -2); ?></td>
							<td style="text-align: center;"><?php echo $php['rik_kode']; ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>