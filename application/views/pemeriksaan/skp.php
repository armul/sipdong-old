				<div class="col-md-9">
					<h1 class="page-header">SKP <small>(berdasarkan LHP <?php echo $buku . ' ' . $tahun; ?>)</small>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Riksis<span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2012; $i--): ?>
								<li><a href="/pemeriksaan/skp/riksis/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
							</ul>
						</div>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Manual<span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2009; $i--): ?>
								<li><a href="/pemeriksaan/skp/manual/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
							</ul>
						</div>
					</h1>
					<table class="table table-bordered">
						<tr>
							<th style="text-align: center;">No.</th>
							<th style="text-align: center;">Nama WP</th>
							<th style="text-align: center;">STP</th>
							<th style="text-align: center;">SKPKB</th>
							<th style="text-align: center;">SKPKBT</th>
							<th style="text-align: center;">SKPLB</th>
							<th style="text-align: center;">SKPN</th>
						</tr>
<?php foreach ($skp as $tap): ?>
<?php if (substr($tap['rik_kode'], 1, 1) != '5' && substr($tap['rik_kode'], 1, 1) != '2' && $tap['stp_jml'] == 0 && $tap['skpkb_jml'] == 0 && $tap['skpkbt_jml'] == 0 && $tap['skplb_jml'] == 0 && $tap['skpn_jml'] == 0) {$cls = "danger";} else {$cls = "success";}; ?>
						<tr class="<?php echo $cls;?>">
							<td style="text-align: right;"><a href="/pemeriksaan/lp2/<?php echo $tap['rik_lp2_no']; ?>"><?php echo $tap['rik_lhp_no']; ?></a></td>
							<td style="text-align: left;"><?php echo $tap['rik_nama']; ?></td>
							<td style="text-align: right;"><?php echo number_format($tap['stp_nil']); ?></td>
							<td style="text-align: right;"><?php echo number_format($tap['skpkb_nil']); ?></td>
							<td style="text-align: right;"><?php echo number_format($tap['skpkbt_nil']); ?></td>
							<td style="text-align: right;"><?php echo number_format($tap['skplb_nil']); ?></td>
							<td style="text-align: right;"><?php echo number_format($tap['skpn_nil']); ?></td>
						</tr>
<?php endforeach ?>
					</table>
				</div>