				<div class="col-md-9">
					<h1 class="page-header">LHP <small><?php echo $buku . ' ' . $tahun; ?></small>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Riksis<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2013; $i--): ?>
								<li><a href="/pemeriksaan/lhp/riksis/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
							</ul>
						</div>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Manual<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2009; $i--): ?>
								<li><a href="/pemeriksaan/lhp/manual/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
							</ul>
						</div>
						<div class="pull-right hidden-print">
						<a class="btn btn-primary" href="/pemeriksaan/labelLHP/<?php echo substr($buku, 0, 1); ?>"><span class="typcn typcn-printer"></span> Cetak Label</a>
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
<?php foreach ($lhp as $lap): ?>
						<tr>
							<td style="text-align: right;"><?php if ($lap['rik_lp2_no']): ?><a href="/pemeriksaan/lp2/<?php echo $lap['rik_lp2_no']; ?>"><?php endif ?><?php echo $lap['rik_lhp_no']; ?><?php if ($lap['rik_lp2_no']): ?></a><?php endif ?></td>
							<td style="text-align: center;"><?php echo date('d-m-Y', strtotime($lap['rik_lhp_tgl'])); ?></td>
							<td style="text-align: center;"><a href="/pemeriksaan/riwayat/<?php echo $lap['rik_npwp']; ?>"><?php echo $this->pemeriksaan_model->formatNPWP($lap['rik_npwp']); ?></a></td>
							<td><?php echo $lap['rik_nama']; ?></td>
							<td style="text-align: center;"><?php echo substr($lap['rik_ms1'], 0, 2) . '-' . substr($lap['rik_ms2'], 0, 2); ?></td>
							<td style="text-align: center;"><?php echo '20' . substr($lap['rik_ms1'], -2); ?></td>
							<td style="text-align: center;"><?php echo $lap['rik_kode']; ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>