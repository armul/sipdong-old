				<div class="col-md-9">
					<h1 class="page-header"><?php echo $riwayat[0]['nama']; ?> <small><?php echo $this->pemeriksaan_model->formatNPWP($riwayat[0]['npwp']); ?></small></h1>
<?php
	$kode = '';
	$_SESSION['script']['tooltip'] = true;
?>
<?php foreach ($riwayat as $pemeriksaan): ?>
<?php if ($pemeriksaan['kode'] != $kode): ?>
					<h2 class="page-header"><?php echo $pemeriksaan['kode']; ?> <small><?php echo $this->pemeriksaan_model->jenisPemeriksaan($pemeriksaan['kode']); ?></small></h2>
<?php endif ?>
					<div class="row">
						<div class="col-md-1">
							<p class="lead"><?php echo $pemeriksaan['tahun']; ?></p>
						</div>
						<div class="col-md-11">
							<div class="btn-group">
								<span class="btn btn-<?php echo $pemeriksaan['01SPNO'] ? ($pemeriksaan['01LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['01LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['01LP2NO'] . '">' : ''; ?>01<?php echo $pemeriksaan['01LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['02SPNO'] ? ($pemeriksaan['02LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['02LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['02LP2NO'] . '">' : ''; ?>02<?php echo $pemeriksaan['02LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['03SPNO'] ? ($pemeriksaan['03LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['03LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['03LP2NO'] . '">' : ''; ?>03<?php echo $pemeriksaan['03LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['04SPNO'] ? ($pemeriksaan['04LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['04LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['04LP2NO'] . '">' : ''; ?>04<?php echo $pemeriksaan['04LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['05SPNO'] ? ($pemeriksaan['05LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['05LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['05LP2NO'] . '">' : ''; ?>05<?php echo $pemeriksaan['05LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['06SPNO'] ? ($pemeriksaan['06LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['06LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['06LP2NO'] . '">' : ''; ?>06<?php echo $pemeriksaan['06LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['07SPNO'] ? ($pemeriksaan['07LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['07LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['07LP2NO'] . '">' : ''; ?>07<?php echo $pemeriksaan['07LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['08SPNO'] ? ($pemeriksaan['08LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['08LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['08LP2NO'] . '">' : ''; ?>08<?php echo $pemeriksaan['08LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['09SPNO'] ? ($pemeriksaan['09LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['09LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['09LP2NO'] . '">' : ''; ?>09<?php echo $pemeriksaan['09LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['10SPNO'] ? ($pemeriksaan['10LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['10LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['10LP2NO'] . '">' : ''; ?>10<?php echo $pemeriksaan['10LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['11SPNO'] ? ($pemeriksaan['11LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['11LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['11LP2NO'] . '">' : ''; ?>11<?php echo $pemeriksaan['11LP2NO'] ? '</a>' : ''; ?></span>
								<span class="btn btn-<?php echo $pemeriksaan['12SPNO'] ? ($pemeriksaan['12LPNO'] ? 'success' : 'warning') : 'default'; ?>"><?php echo $pemeriksaan['12LP2NO'] ? '<a href="/pemeriksaan/lp2/' . $pemeriksaan['12LP2NO'] . '">' : ''; ?>12<?php echo $pemeriksaan['12LP2NO'] ? '</a>' : ''; ?></span>
							</div>
						</div>
					</div>
<?php $kode = $pemeriksaan['kode'] ?>
<?php endforeach ?>
				</div><?php /*
data-toggle="tooltip" title="<?php echo $pemeriksaan['01SPNO'] ? 'SP2 No ' . $pemeriksaan['01SPNO'] . '/' . $pemeriksaan['01SPBK'] . '/' . substr($pemeriksaan['01SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['01LPNO'] ? 'LHP No ' . $pemeriksaan['01LPNO'] . '/' . $pemeriksaan['01LPBK'] . '/' . substr($pemeriksaan['01LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['02SPNO'] ? 'SP2 no ' . $pemeriksaan['02SPNO'] . '/' . $pemeriksaan['02SPBK'] . '/' . substr($pemeriksaan['02SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['02LPNO'] ? 'LHP no ' . $pemeriksaan['02LPNO'] . '/' . $pemeriksaan['02LPBK'] . '/' . substr($pemeriksaan['02LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['03SPNO'] ? 'SP2 no ' . $pemeriksaan['03SPNO'] . '/' . $pemeriksaan['03SPBK'] . '/' . substr($pemeriksaan['03SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['03LPNO'] ? 'LHP no ' . $pemeriksaan['03LPNO'] . '/' . $pemeriksaan['03LPBK'] . '/' . substr($pemeriksaan['03LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['04SPNO'] ? 'SP2 no ' . $pemeriksaan['04SPNO'] . '/' . $pemeriksaan['04SPBK'] . '/' . substr($pemeriksaan['04SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['04LPNO'] ? 'LHP no ' . $pemeriksaan['04LPNO'] . '/' . $pemeriksaan['04LPBK'] . '/' . substr($pemeriksaan['04LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['05SPNO'] ? 'SP2 no ' . $pemeriksaan['05SPNO'] . '/' . $pemeriksaan['05SPBK'] . '/' . substr($pemeriksaan['05SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['05LPNO'] ? 'LHP no ' . $pemeriksaan['05LPNO'] . '/' . $pemeriksaan['05LPBK'] . '/' . substr($pemeriksaan['05LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['06SPNO'] ? 'SP2 no ' . $pemeriksaan['06SPNO'] . '/' . $pemeriksaan['06SPBK'] . '/' . substr($pemeriksaan['06SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['06LPNO'] ? 'LHP no ' . $pemeriksaan['06LPNO'] . '/' . $pemeriksaan['06LPBK'] . '/' . substr($pemeriksaan['06LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['07SPNO'] ? 'SP2 no ' . $pemeriksaan['07SPNO'] . '/' . $pemeriksaan['07SPBK'] . '/' . substr($pemeriksaan['07SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['07LPNO'] ? 'LHP no ' . $pemeriksaan['07LPNO'] . '/' . $pemeriksaan['07LPBK'] . '/' . substr($pemeriksaan['07LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['08SPNO'] ? 'SP2 no ' . $pemeriksaan['08SPNO'] . '/' . $pemeriksaan['08SPBK'] . '/' . substr($pemeriksaan['08SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['08LPNO'] ? 'LHP no ' . $pemeriksaan['08LPNO'] . '/' . $pemeriksaan['08LPBK'] . '/' . substr($pemeriksaan['08LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['09SPNO'] ? 'SP2 no ' . $pemeriksaan['09SPNO'] . '/' . $pemeriksaan['09SPBK'] . '/' . substr($pemeriksaan['09SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['09LPNO'] ? 'LHP no ' . $pemeriksaan['09LPNO'] . '/' . $pemeriksaan['09LPBK'] . '/' . substr($pemeriksaan['09LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['10SPNO'] ? 'SP2 no ' . $pemeriksaan['10SPNO'] . '/' . $pemeriksaan['10SPBK'] . '/' . substr($pemeriksaan['10SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['10LPNO'] ? 'LHP no ' . $pemeriksaan['10LPNO'] . '/' . $pemeriksaan['10LPBK'] . '/' . substr($pemeriksaan['10LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['11SPNO'] ? 'SP2 no ' . $pemeriksaan['11SPNO'] . '/' . $pemeriksaan['11SPBK'] . '/' . substr($pemeriksaan['11SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['11LPNO'] ? 'LHP no ' . $pemeriksaan['11LPNO'] . '/' . $pemeriksaan['11LPBK'] . '/' . substr($pemeriksaan['11LPTG'], 6, 4) : ''; ?>"
data-toggle="tooltip" title="<?php echo $pemeriksaan['12SPNO'] ? 'SP2 no ' . $pemeriksaan['12SPNO'] . '/' . $pemeriksaan['12SPBK'] . '/' . substr($pemeriksaan['12SPTG'], 6, 4) . ' ' : ''; echo $pemeriksaan['12LPNO'] ? 'LHP no ' . $pemeriksaan['12LPNO'] . '/' . $pemeriksaan['12LPBK'] . '/' . substr($pemeriksaan['12LPTG'], 6, 4) : ''; ?>"
*/ ?>