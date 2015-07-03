				<div class="col-md-9">
					<h1 class="page-header">Ikhtisar Penerbitan SP2
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Riksis<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/pemeriksaan/sp2/riksis/2014">2014</a></li>
								<li><a href="/pemeriksaan/sp2/riksis/2013">2013</a></li>
								<li><a href="/pemeriksaan/sp2/riksis/2012">2012</a></li>
							</ul>
						</div>
						<div class="btn-group hidden-print">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Manual<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/pemeriksaan/sp2/manual/2014">2014</a></li>
								<li><a href="/pemeriksaan/sp2/manual/2013">2013</a></li>
								<li><a href="/pemeriksaan/sp2/manual/2012">2012</a></li>
								<li><a href="/pemeriksaan/sp2/manual/2011">2011</a></li>
								<li><a href="/pemeriksaan/sp2/manual/2010">2010</a></li>
								<li><a href="/pemeriksaan/sp2/manual/2009">2009</a></li>
							</ul>
						</div>
					</h1>
<?php foreach ($ikhtisar as $ikh): ?>
					<div class="row">
						<div class="col-md-1">
							<p style="line-height: 1em; margin: 0; padding: 0"><?php echo $ikh['tahun']; ?></p>
						</div>
						<div class="col-md-9" style="vertical-align: middle;">
							<div class="progress" style="height: 20px;">
								<div class="progress-bar progress-bar-success" style="width: <?php echo 100 * $ikh['selesai'] / $ikh['jumlah']; ?>%"><?php echo $ikh['selesai'];?> selesai</div>
								<div class="progress-bar progress-bar-warning" style="width: <?php echo 100 * $ikh['belum'] / $ikh['jumlah']; ?>%"><?php echo $ikh['belum'];?> belum selesai</div>
							</div>
						</div>
					</div>
<?php endforeach ?>
				<code><?php echo $this->db->last_query(); ?></code>
				</div>