				<div class="col-md-9">
					<ul class="nav nav-tabs">
						<li><a href="/tatausaha/suratmasuk">Rekam Baru</a></li>
						<li><a href="/tatausaha/suratmasuk<?php echo "/$th";?>">Agenda</a></li>
						<li class="active"><a href="#"><?php echo "$th-$no";?></a></li>
					</ul>
					<div class="tab-content">
						<h2><?php echo $sm[0]['tu_sm_nosrt']; ?><small class="pull-right"><?php echo $this->sipdong_model->formatTanggal($sm[0]['tu_sm_tgsrt']); ?></small></h2>
						<hr>
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Dari</label>
								<div class="col-sm-10">
									<span class="form-control">
										<a class="badge"><?php echo $sm[0]['tu_sm_pengirim']; ?></a>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Hal</label>
								<div class="col-sm-10">
									<span class="form-control"><?php echo preg_replace('/a.n. ([A-Za-z0-9 \/]+)$/', 'a.n. <a class="badge" href="/tatausaha/suratmasuk/' . $sm[0]['tu_sm_npwp'] . '">$1</a>', $sm[0]['tu_sm_hal']); ?></span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</form>
						<div class="tab-pane active">
<?php if (isset($sm)): ?>
							<pre><?php print_r($sm); ?></pre>
<?php endif ?>
						</div>
					</div>
				</div>