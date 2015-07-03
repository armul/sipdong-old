				<div class="col-md-9">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#nd" data-toggle="tab">Nota Dinas</a></li>
						<li><a href="#" data-toggle="tab">Surat</a></li>
						<li><a href="#" data-toggle="tab">Surat Pengantar</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="nd" style="padding-top: 20px;">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tgl.</th>
										<th>Tujuan</th>
										<th>Hal</th>
									</tr>
								</thead>
								<tbody>
<?php foreach ($suratkeluar as $sk): ?>
									<tr>
										<td><?php echo $sk['tu_sk_nosrt']; ?></td>
										<td><?php echo date('d-m-Y', strtotime($sk['tu_sk_tgsrt'])); ?></td>
										<td><?php echo $sk['tu_sk_tujuan']; ?></td>
										<td><?php echo $sk['tu_sk_hal']; ?></td>
									</tr>
<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>