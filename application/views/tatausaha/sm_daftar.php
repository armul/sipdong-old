				<div class="col-md-9">
					<ul class="nav nav-tabs">
						<li><a href="/tatausaha/suratmasuk">Rekam Baru</a></li>
						<li class="active"><a href="#">Agenda</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active">
							<h2>Surat Masuk<?php echo " <small>$th</small>"; ?>
								<div class="btn-group hidden-print">
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Tahun<span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu">
<?php for ($i=date('Y'); $i>= 2012; $i--): ?>
										<li><a href="/tatausaha/suratmasuk/<?php echo $i?>"><?php echo $i?></a></li>
<?php endfor ?>
									</ul>
								</div>
							</h2>
<?php if (isset($sm)): ?>
						<table class="table table-bordered">
								<tr>
									<th>No.</th>
									<th>Pengirim</th>
									<th>Hal</th>
								</tr>
<?php foreach ($sm as $agd): ?>
							<tr>
									<td class="text-right"><span><a href="/tatausaha/suratmasuk/<?php echo date('Y') . '/' . $agd['tu_sm_noagd']; ?>"><?php echo $agd['tu_sm_noagd']; ?></a></span></td>
									<td><a href="/tatausaha/suratmasuk/<?php echo $agd['tu_sm_pengirim']; ?>"><?php echo $agd['tu_sm_pengirim']; ?></a></td>
									<td><?php echo preg_replace('/a.n. ([A-Za-z0-9 \/]+)$/', 'a.n. <a href="/tatausaha/suratmasuk/' . $agd['tu_sm_npwp'] . '">$1</a>', $agd['tu_sm_hal']); ?></td>
								</tr>
<?php endforeach ?>
						</table>
<?php endif ?>
						</div>
					</div>
				</div>